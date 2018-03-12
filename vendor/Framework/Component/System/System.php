<?php
namespace Framework\Component\System;

class System
{
    public static function scriptExecutionTime()
    {
        return $_SESSION['SYSTEM']['scriptExecutionTime'] ? $_SESSION['SYSTEM']['scriptExecutionTime'] : 'Need to setup start script';
    }

    public static function startScriptTime()
    {
        $mtime = microtime();
        $mtime = explode(" ",$mtime);
        $mtime = $mtime[1] + $mtime[0];
        $starttime = $mtime;
        $_SESSION['system']['system']['scriptStartTime'] = $starttime;
    }

    public static function stopScriptTime()
    {
        $mtime = microtime();
        $mtime = explode(" ",$mtime);
        $mtime = $mtime[1] + $mtime[0];
        $endtime = $mtime;
        if(!$_SESSION['system']['system']['scriptStartTime']) die('Need to setup start script');
        $totaltime = ($endtime - $_SESSION['system']['system']['scriptStartTime']);
        $_SESSION['SYSTEM']['scriptExecutionTime'] = "Execution time ".(round($totaltime*1000, 2))." ms";
    }

    public static function getCPUCount()
    {
        $cmd = "uname";
        $OS = strtolower(trim(shell_exec($cmd)));

        switch($OS) {
            case('linux'):
                $cmd = "cat /proc/cpuinfo | grep processor | wc -l";
                break;
            case('freebsd'):
                $cmd = "sysctl -a | grep 'hw.ncpu' | cut -d ':' -f2";
                break;
            default:
                unset($cmd);
        }

        if ($cmd != '') {
            $cpuCoreNo = intval(trim(shell_exec($cmd)));
        }

        return empty($cpuCoreNo) ? 1 : $cpuCoreNo;
    }
}