<?php

namespace Core\Database\Kohana\Database;

class MySQL extends \Core\Database\Database {

	// Database in use by each connection
	protected static $_current_databases = array();

	// Use SET NAMES to set the character set
	protected static $_set_names;

	// Identifier for this connection within the PHP driver
	protected $_connection_id;

	// MySQL uses a backtick for identifiers
	protected $_identifier = '`';

	public function connect()
	{
		if ($this->_connection)
			return;

		if (\Core\Database\Database\MySQL::$_set_names === NULL)
		{
			// Determine if we can use mysql_set_charset(), which is only
			// available on PHP 5.2.3+ when compiled against MySQL 5.0+
			\Core\Database\Database\MySQL::$_set_names = ! function_exists('mysql_set_charset');
		}

		// Extract the connection parameters, adding required variabels
		extract(\App\Config::DB + array(
			'base'   => '',
			'host'   => '',
			'user'   => '',
			'pass'   => '',
			'type' => 'MySQL',
			'persistent' => TRUE,
		));


		// Prevent this information from showing up in traces
		unset($this->_config['connection']['username'], $this->_config['connection']['password']);

		try
		{
            $this->_connection = mysqli_connect($host, $user, $pass, $base);
            $this->_connection->set_charset("utf8");
		}
		catch (Exception $e)
		{
			// No connection exists
			$this->_connection = NULL;

			throw new \Exception(':error',
				array(':error' => $e->getMessage()),
				$e->getCode());
		}

		// \xFF is a better delimiter, but the PHP driver uses underscore
		$this->_connection_id = sha1($host.'_'.$user.'_'.$pass);

		$this->_select_db($base);

		if ( ! empty($this->_config['charset']))
		{
			// Set the character set
			$this->set_charset($this->_config['charset']);
		}

		if ( ! empty($this->_config['connection']['variables']))
		{
			// Set session variables
			$variables = array();

			foreach ($this->_config['connection']['variables'] as $var => $val)
			{
				$variables[] = 'SESSION '.$var.' = '.$this->quote($val);
			}

			mysqli_query('SET '.implode(', ', $variables), $this->_connection);
		}
	}

	/**
	 * Select the database
	 *
	 * @param   string  $database Database
	 * @return  void
	 */
	protected function _select_db($database)
	{
		if ( ! mysqli_select_db($this->_connection,$database))
		{
			// Unable to select database
			throw new \Exception(':error',
				array(':error' => mysqli_error($this->_connection)),
				mysqli_errno($this->_connection));
		}

		\Core\Database\Database\MySQL::$_current_databases[$this->_connection_id] = $database;
	}

	public function disconnect()
	{
		try
		{
			// Database is assumed disconnected
			$status = TRUE;

			if (is_resource($this->_connection))
			{
				if ($status = mysql_close($this->_connection))
				{
					// Clear the connection
					$this->_connection = NULL;

					// Clear the instance
					parent::disconnect();
				}
			}
		}
		catch (Exception $e)
		{
			// Database is probably not disconnected
			$status = ! is_resource($this->_connection);
		}

		return $status;
	}

	public function set_charset($charset)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		if (\Core\Database\Database\MySQL::$_set_names === TRUE)
		{
			// PHP is compiled against MySQL 4.x
			$status = (bool) mysql_query('SET NAMES '.$this->quote($charset), $this->_connection);
		}
		else
		{
			// PHP is compiled against MySQL 5.x
			$status = mysql_set_charset($charset, $this->_connection);
		}

		if ($status === FALSE)
		{
			throw new \Exception(':error',
				array(':error' => mysql_error($this->_connection)),
				mysql_errno($this->_connection));
		}
	}

	public function query($type, $sql, $as_object = FALSE, array $params = NULL)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		if ( ! empty($this->_config['connection']['persistent']) AND $this->_config['connection']['database'] !== Database_MySQL::$_current_databases[$this->_connection_id])
		{
			// Select database on persistent connections
			$this->_select_db($this->_config['connection']['database']);
		}

		// Execute the query
		if (($result = mysqli_query($this->_connection, $sql)) === FALSE)
		{
			if (isset($benchmark))
			{
				// This benchmark is worthless
				Profiler::delete($benchmark);
			}

			throw new \Exception(mysqli_error($this->_connection));
		}

		if (isset($benchmark))
		{
			Profiler::stop($benchmark);
		}

		// Set the last query
		$this->last_query = $sql;

		if ($type === \Core\Database\Database::SELECT)
		{
			// Return an iterator of results
			return new \Core\Database\Database\MySQL\Result($result, $sql, $as_object, $params);
		}
		elseif ($type === \Core\Database\Database::INSERT)
		{
			// Return a list of insert id and rows created
			return array(
				mysqli_insert_id($this->_connection),
				mysqli_affected_rows($this->_connection),
			);
		}
		else
		{
			// Return the number of rows affected
			return mysqli_affected_rows($this->_connection);
		}
	}

	public function datatype($type)
	{
		static $types = array
		(
			'blob'                      => array('type' => 'string', 'binary' => TRUE, 'character_maximum_length' => '65535'),
			'bool'                      => array('type' => 'bool'),
			'bigint unsigned'           => array('type' => 'int', 'min' => '0', 'max' => '18446744073709551615'),
			'datetime'                  => array('type' => 'string'),
			'decimal unsigned'          => array('type' => 'float', 'exact' => TRUE, 'min' => '0'),
			'double'                    => array('type' => 'float'),
			'double precision unsigned' => array('type' => 'float', 'min' => '0'),
			'double unsigned'           => array('type' => 'float', 'min' => '0'),
			'enum'                      => array('type' => 'string'),
			'fixed'                     => array('type' => 'float', 'exact' => TRUE),
			'fixed unsigned'            => array('type' => 'float', 'exact' => TRUE, 'min' => '0'),
			'float unsigned'            => array('type' => 'float', 'min' => '0'),
			'geometry'                  => array('type' => 'string', 'binary' => TRUE),
			'int unsigned'              => array('type' => 'int', 'min' => '0', 'max' => '4294967295'),
			'integer unsigned'          => array('type' => 'int', 'min' => '0', 'max' => '4294967295'),
			'longblob'                  => array('type' => 'string', 'binary' => TRUE, 'character_maximum_length' => '4294967295'),
			'longtext'                  => array('type' => 'string', 'character_maximum_length' => '4294967295'),
			'mediumblob'                => array('type' => 'string', 'binary' => TRUE, 'character_maximum_length' => '16777215'),
			'mediumint'                 => array('type' => 'int', 'min' => '-8388608', 'max' => '8388607'),
			'mediumint unsigned'        => array('type' => 'int', 'min' => '0', 'max' => '16777215'),
			'mediumtext'                => array('type' => 'string', 'character_maximum_length' => '16777215'),
			'national varchar'          => array('type' => 'string'),
			'numeric unsigned'          => array('type' => 'float', 'exact' => TRUE, 'min' => '0'),
			'nvarchar'                  => array('type' => 'string'),
			'point'                     => array('type' => 'string', 'binary' => TRUE),
			'real unsigned'             => array('type' => 'float', 'min' => '0'),
			'set'                       => array('type' => 'string'),
			'smallint unsigned'         => array('type' => 'int', 'min' => '0', 'max' => '65535'),
			'text'                      => array('type' => 'string', 'character_maximum_length' => '65535'),
			'tinyblob'                  => array('type' => 'string', 'binary' => TRUE, 'character_maximum_length' => '255'),
			'tinyint'                   => array('type' => 'int', 'min' => '-128', 'max' => '127'),
			'tinyint unsigned'          => array('type' => 'int', 'min' => '0', 'max' => '255'),
			'tinytext'                  => array('type' => 'string', 'character_maximum_length' => '255'),
			'year'                      => array('type' => 'string'),
		);

		$type = str_replace(' zerofill', '', $type);

		if (isset($types[$type]))
			return $types[$type];

		return parent::datatype($type);
	}

	/**
	 * Start a SQL transaction
	 *
	 * @link http://dev.mysql.com/doc/refman/5.0/en/set-transaction.html
	 *
	 * @param string $mode  Isolation level
	 * @return boolean
	 */
	public function begin($mode = NULL)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		if ($mode AND ! mysql_query("SET TRANSACTION ISOLATION LEVEL $mode", $this->_connection))
		{
			throw new \Exception(':error',
				array(':error' => mysql_error($this->_connection)),
				mysql_errno($this->_connection));
		}

		return (bool) mysql_query('START TRANSACTION', $this->_connection);
	}

	/**
	 * Commit a SQL transaction
	 *
	 * @return boolean
	 */
	public function commit()
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return (bool) mysql_query('COMMIT', $this->_connection);
	}

	/**
	 * Rollback a SQL transaction
	 *
	 * @return boolean
	 */
	public function rollback()
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		return (bool) mysql_query('ROLLBACK', $this->_connection);
	}

	public function list_tables($like = NULL)
	{
		if (is_string($like))
		{
			// Search for table names
			$result = $this->query(\Core\Database\Database::SELECT, 'SHOW TABLES LIKE '.$this->quote($like), FALSE);
		}
		else
		{
			// Find all table names
			$result = $this->query(\Core\Database\Database::SELECT, 'SHOW TABLES', FALSE);
		}

		$tables = array();
		foreach ($result as $row)
		{
			$tables[] = reset($row);
		}

		return $tables;
	}

	public function list_columns($table, $like = NULL, $add_prefix = TRUE)
	{
		// Quote the table name
		$table = ($add_prefix === TRUE) ? $this->quote_table($table) : $table;

		if (is_string($like))
		{
			// Search for column names
			$result = $this->query(\Core\Database\Database::SELECT, 'SHOW FULL COLUMNS FROM '.$table.' LIKE '.$this->quote($like), FALSE);
		}
		else
		{
			// Find all column names
			$result = $this->query(\Core\Database\Database::SELECT, 'SHOW FULL COLUMNS FROM '.$table, FALSE);
		}

		$count = 0;
		$columns = array();
		foreach ($result as $row)
		{
			list($type, $length) = $this->_parse_type($row['Type']);

			$column = $this->datatype($type);

			$column['column_name']      = $row['Field'];
			$column['column_default']   = $row['Default'];
			$column['data_type']        = $type;
			$column['is_nullable']      = ($row['Null'] == 'YES');
			$column['ordinal_position'] = ++$count;

			switch ($column['type'])
			{
				case 'float':
					if (isset($length))
					{
						list($column['numeric_precision'], $column['numeric_scale']) = explode(',', $length);
					}
				break;
				case 'int':
					if (isset($length))
					{
						// MySQL attribute
						$column['display'] = $length;
					}
				break;
				case 'string':
					switch ($column['data_type'])
					{
						case 'binary':
						case 'varbinary':
							$column['character_maximum_length'] = $length;
						break;
						case 'char':
						case 'varchar':
							$column['character_maximum_length'] = $length;
						case 'text':
						case 'tinytext':
						case 'mediumtext':
						case 'longtext':
							$column['collation_name'] = $row['Collation'];
						break;
						case 'enum':
						case 'set':
							$column['collation_name'] = $row['Collation'];
							$column['options'] = explode('\',\'', substr($length, 1, -1));
						break;
					}
				break;
			}

			// MySQL attributes
			$column['comment']      = $row['Comment'];
			$column['extra']        = $row['Extra'];
			$column['key']          = $row['Key'];
			$column['privileges']   = $row['Privileges'];

			$columns[$row['Field']] = $column;
		}

		return $columns;
	}

	public function escape($value)
	{
		// Make sure the database is connected
		$this->_connection or $this->connect();

		if (($value = mysqli_real_escape_string($this->_connection, (string) $value)) === FALSE)
		{
			throw new \Exception(':error',
				array(':error' => mysql_error($this->_connection)),
				mysql_errno($this->_connection));
		}

		// SQL standard is to use single-quotes for all values
		return "'$value'";
	}

} // End Database_MySQL
