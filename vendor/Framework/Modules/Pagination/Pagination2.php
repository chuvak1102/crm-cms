<?php
namespace Framework\Modules\Pagination;
use Framework\Modules\DB\Connection;

class Pagination2
{
    public $listingCount = 10;
    public $itemsOnPage = 25;

    private $currentPage = 1;
    private $currentPageIndex = 1;
    private $iteration = 1;
    private $totalItems = 0;
    private $totalPages = 1;
    private $path;
    public $product = array();


    function __construct($product, $fullPath, $currentPage)
    {
        if(!is_array($product)) return null;

        $this->totalItems = count($product);
        $this->totalPages = ceil($this->totalItems / $this->itemsOnPage);
        $this->currentPage = $currentPage;
        $this->currentPageIndex = $this->getCurrentIndex();
        $this->iteration = $this->getIteration();
        $this->path = $fullPath;
        $spliceFrom = $this->currentPage * $this->itemsOnPage - $this->itemsOnPage;
        $this->product = array_splice($product, $spliceFrom, $this->itemsOnPage, true);
        if(count($this->product) == 1) $this->product = $this->product[0];

    }

    private function getCurrentIndex()
    {
        return $this->currentPage % $this->listingCount == 0 ? $this->listingCount : $this->currentPage % $this->listingCount;
    }

    private function getIteration()
    {
        return ($this->currentPage - $this->getCurrentIndex()) / $this->listingCount;
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
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage - $this->listingCount?>">...</a></li>
                <?}?>

                <?for($i = 1; $i <= $this->listingCount; $i++){?>
                    <?$n = $this->iteration * $this->listingCount + $i?>
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

                <?if($this->currentPage + $this->listingCount - $this->currentPageIndex < $this->totalPages){?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage + $this->listingCount?>">...</a></li>
                <?}?>

                <?if($this->currentPage >= $this->totalPages){?>
                    <li> > </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->currentPage + 1?>"> > </a></li>
                <?}?>

                <?if($this->totalPages - $this->currentPage + $this->currentPageIndex < $this->listingCount){?>
                    <li> >> </li>
                <?}else{?>
                    <li><a href="/<?=$this->path?>/page-<?=$this->totalPages?>"> >> </a></li>
                <?}?>
            </ul>
        </div>
        <?
    }
}
