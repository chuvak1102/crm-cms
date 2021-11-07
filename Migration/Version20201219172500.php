<?php

declare(strict_types=1);

namespace Migration;

use Core\Database\Database;
use Core\Database\DB;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201219172500 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $e = DB::query(Database::SELECT, "
        select  category.alias u1, parent.alias u2, p.alias u3, category.name n1, parent.name n2, p.name n3 from category
left join category as parent on parent.parent_id = category.id
join product_to_category ptc on category.id = ptc.category_id
join product p on ptc.product_id = p.id
        ")->execute()->fetch_all();

        foreach ($e as $i) {

            $url = "/katalog-tovarov/{$i->u1}";
            if ($i->u2) {
                $url .= "/{$i->u2}";
            }
            if ($i->u3) {
                $url .= "/{$i->u3}";
            }
            $h1 = $i->n1;
            $title = $i->n1 . ' купить в Москве';
            $description = $i->n1 . ' купить Москва недорого с доставкой';

            if ($i->u2) {
                $h1 = $i->n2;
                $title = $i->n2 . ' купить в Москве';
                $description = $i->n2 . ' купить Москва недорого с доставкой';
            }
            if ($i->u3) {
                $h1 = $i->n3;
                $title = $i->n3 . ' купить в Москве';
                $description = $i->n3 . ' купить Москва недорого с доставкой';
            }

            DB::insert('seo', ['url', 'h1', 'title', 'description'])
                ->values([
                    $url, $h1, $title, $description
                ])->execute();
        }

        $e = DB::query(Database::SELECT, "
        select  category.alias u1, parent.alias u2, category.name n1, parent.name n2 from category
left join category as parent on parent.parent_id = category.id
        ")->execute()->fetch_all();

        foreach ($e as $i) {

            $url = "/katalog-tovarov/{$i->u1}";
            if ($i->u2) {
                $url .= "/{$i->u2}";
            }

            $h1 = $i->n1;
            $title = $i->n1 . ' купить в Москве';
            $description = $i->n1 . ' купить Москва недорого с доставкой';

            if ($i->u2) {
                $h1 = $i->n2;
                $title = $i->n2 . ' купить в Москве';
                $description = $i->n2 . ' купить Москва недорого с доставкой';
            }

            DB::insert('seo', ['url', 'h1', 'title', 'description'])
                ->values([
                    $url, $h1, $title, $description
                ])->execute();
        }

        $e = DB::query(Database::SELECT, "
        select  category.alias u1, category.name n1 from category
        ")->execute()->fetch_all();
        foreach ($e as $i) {

            $url = "/katalog-tovarov/{$i->u1}";

            $h1 = $i->n1;
            $title = $i->n1 . ' купить в Москве';
            $description = $i->n1 . ' купить Москва недорого с доставкой';

            DB::insert('seo', ['url', 'h1', 'title', 'description'])
                ->values([
                    $url, $h1, $title, $description
                ])->execute();
        }
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('truncate table seo');
    }
}
