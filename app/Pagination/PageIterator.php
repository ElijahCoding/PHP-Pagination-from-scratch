<?php

namespace App\Pagination;

use Iterator;
use App\Pagination\Meta;

class PageIterator implements Iterator
{
    protected $pages;

    protected $meta;

    public function __construct(array $pages, Meta $meta)
    {
        $this->pages = $pages;
        $this->meta = $meta;
    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function next()
    {

    }

    public function rewind()
    {

    }
    
    public function valid()
    {

    }

}
