<?php

namespace App\Pagination\Renderers;

use App\Pagination\Meta;
use App\Pagination\Renderers\RendererAbstract;

class PlainRenderer extends RendererAbstract
{
    public function render()
    {
        $iterator = $this->pages();

        $html = '<ul>';

        foreach ($iterator as $page) {
            if ($iterator->isCurrentPage()) {
                $html .= '<li>
                <strong><a href="">' . $page . '</a></strong>
                </li>';
            }
            $html .= '<li>
                <a href="">' . $page . '</a>
            </li>';
        }

        $html .= '</ul>';

        return $html;
    }

    protected function query()
    {
        
    }
}
