<?php

namespace App\Site\Controller;
use Core\Database\DB;

class Site extends \Core\Controller {

    public function before()
    {
        // запихать каталог на все страницы
        $catalog = DB::select('*')
            ->from('category')
            ->where('active', '=', '1')
            ->order_by('sort')
            ->execute()
            ->fetch_all();

        $category = [];
        foreach ($catalog as $i) {

            if ($i->parent_id) {
                $category[$i->parent_id]['extend'][] = [
                    'name' => $i->name,
                    'alias' => $i->alias,
                ];
            } else {
                $category[$i->id] = [
                    'name' => $i->name,
                    'alias' => $i->alias,
                    'extend' => []
                ];
            }
        }

        \Core\Page::instance()->push('menu', $category);

        parent::before();
    }
}
