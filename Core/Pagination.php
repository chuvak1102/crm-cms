<?php

namespace Core;

class Pagination {

    private $result = [];
    private $page = 1;
    private $url = "#";

    function __construct(int $all, int $limit, int $length, int $page, string $urlPrefix)
    {
        $pagesCount = ceil($all / $limit);
        $this->page = $page;
        $this->url = $urlPrefix;

        if ($pagesCount < ($length + 1) * 3) {
            for ($i = 1; $i <= $pagesCount; $i++){
                $this->push($i, $i === $page);
            }
        } else {
            if ($page <= $length - 1) {
                for ($i = 1; $i <= $length; $i++){
                    $this->push($i, $i === $page);
                }

                $this->push(round($pagesCount / 2), false, "skip");

                for ($i = $pagesCount - $length + 1; $i <= $pagesCount; $i++){
                    $this->push($i, $i === $page);
                }
            } else if ($page >= $length && $page < ($length + 1) * 2) {
                for ($i = 1; $i < (($length + 1) * 2) + 1; $i++){
                    $this->push($i, $i === $page);
                }

                $this->push(round((($pagesCount - $length) - ($length + 1) * 2) / 2), false, "skip");

                for ($i = $pagesCount - $length + 1; $i <= $pagesCount; $i++){
                    $this->push($i, $i === $page);
                }
            } else if ($page >= ($length + 1) * 2 && $page <= $pagesCount - (($length + 1) * 2) + 1) {
                for ($i = 1; $i <= $length; $i++){
                    $this->push($i, $i === $page);
                }

                $this->push(round($page / 2), false, "skip");

                for ($i = $page - $length; $i <= $page + $length; $i++){
                    $this->push($i, $i === $page);
                }

                $this->push(round(($pagesCount + $page) / 2), false, "skip");

                for ($i = $pagesCount - $length + 1; $i <= $pagesCount; $i++){
                    $this->push($i, $i === $page);
                }
            } else {
                for ($i = 1; $i <= $length; $i++){
                    $this->push($i, $i === $page);
                }
                $this->push(round($pagesCount / 2), false, "skip");

                for ($i = $page - $length; $i <= $pagesCount; $i++){
                    $this->push($i, $i === $page);
                }
            }
        }

        if (count($this->result) == 1) $this->result = [];
    }

    function render()
    {
        ?>
            <div class="btn-group" style="margin-left: 13px">
                <?foreach($this->result as $i){?>
                    <a
                        href="<?=$this->url.$i['page']?>"
                        class="btn btn-white <?=$this->page == $i['page'] ? 'active' : ''?>"
                    >
                        <?=$i['state'] == 'open' ? $i['page'] : '...'?>
                    </a>
                <?}?>
            </div>
        <?
    }

    private function push(int $page, int $current, $state = 'open')
    {
        array_push($this->result, [
            'page' => $page,
            'state' => $state,
            'current' => $current
        ]);
    }

}