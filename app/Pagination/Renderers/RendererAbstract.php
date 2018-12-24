<?php

namespace App\Pagination\Renderers;

use App\Pagination\Meta;
use App\Paginations\PageIterator;

abstract class RendererAbstract
{
    protected $meta;

    public function __construct(Meta $meta)
    {
        $this->meta = $meta;
    }

    public function pages()
    {
        $lrCount = 2;

        $range = range(1, $this->meta->lastPage);

        $endDifference = max(0, $this->meta->page - ($this->meta->lastPage - $lrCount) + 1);

        $range = array_slice($range, max(1, ($this->meta->page - $lrCount) - $endDifference));
        $range = array_slice($range, 0, ($lrCount * 2));

        array_unshift($range, 1);
        $range[] = $this->meta->lastPage();

        return new PageIterator(
            array_unique($range),
            $this->meta
        );
    }

    abstract public function render();
}
