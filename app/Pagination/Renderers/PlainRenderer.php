<?php

namespace App\Pagination\Renderers;

use App\Pagination\Meta;
use App\Pagination\Renderers\RendererAbstract;

class PlainRenderer extends RendererAbstract
{
    public function render()
    {
        $iterator = $this->pages();

        foreach ($iterator as $page) {
            dump($page);
        }
    }
}
