<?php
namespace Framework\Modules\Pagination;
use Framework\Modules\DB\Connection;

class Pagination
{
    private $buttonsCount;
    private $itemsOnPage;

    private $currentPage = 1;
    private $currentPageIndex = 1;
    private $iteration = 1;
    private $totalItems = 0;
    private $totalPages = 1;
    private $path;
    public $product = array();

    function __construct($product, $fullPath, $currentPage, $buttonsCount = 10, $itemsOnPage = 15)
    {
        if(!is_array($product)) return null;

        $this->buttonsCount = $buttonsCount;
        $this->itemsOnPage = $itemsOnPage;
        $this->totalItems = count($product);
        $this->totalPages = ceil($this->totalItems / $this->itemsOnPage);
        $this->currentPage = $currentPage;
        $this->currentPageIndex = $this->getCurrentIndex();
        $this->iteration = $this->getIteration();
        $this->path = $fullPath;
        $this->product = $product;
        if(count($this->product) == 1) $this->product = $this->product[0];
    }

    private function getCurrentIndex()
    {
        return $this->currentPage % $this->buttonsCount == 0 ? $this->buttonsCount : $this->currentPage % $this->buttonsCount;
    }

    private function getIteration()
    {
        return ($this->currentPage - $this->getCurrentIndex()) / $this->buttonsCount;
    }

    public function getWidget()
    {
        ?>
        <div class="pagination">
            <ul>
                <?if($this->iteration == 0){?>
                    <li> << </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-1"> << </a></li>
                <?}?>

                <?if($this->currentPage <= 1){?>
                    <li> < </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage - 1?>"> < </a></li>
                <?}?>

                <?if($this->iteration > 0){?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage - $this->buttonsCount?>">...</a></li>
                <?}?>

                <?for($i = 1; $i <= $this->buttonsCount; $i++){?>
                    <?$n = $this->iteration * $this->buttonsCount + $i?>
                    <?if($n <= $this->totalPages){?>
                        <?if($i == $this->currentPageIndex){?>
                            <li class="active">
                                <?=$n?>
                            </li>
                        <?}else{?>
                            <li>
                                <a href="/<?=$this->path?>/page-<?=$n?>">
                                    <?=$n?>
                                </a>
                            </li>
                        <?}?>
                    <?}?>
                <?}?>

                <?if($this->currentPage + $this->buttonsCount - $this->currentPageIndex < $this->totalPages){?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage + $this->buttonsCount?>">...</a></li>
                <?}?>

                <?if($this->currentPage >= $this->totalPages){?>
                    <li> > </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage + 1?>"> > </a></li>
                <?}?>

                <?if($this->totalPages - $this->currentPage + $this->currentPageIndex < $this->buttonsCount){?>
                    <li> >> </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->totalPages?>"> >> </a></li>
                <?}?>
            </ul>
        </div>
        <div style="clear: both"></div>
        <?
    }
}
