<?php

namespace App\Pagination;

use App\Pagination\Meta;

class Results
{
    protected $results;

    protected $meta;

    public function __construct(array $results, Meta $meta)
    {
        $this->results = $results;
        $this->meta = $meta;
    }

    public function get()
    {
        return $this->results;
    }

    public function render()
    {

    }
}
