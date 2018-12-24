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

        if ($iterator->hasPrevious()) {
            $html .= '<li>
                <a href="' . $this->query($this->meta->page - 1) . '">Previous</a>
            </li>';
        }

        foreach ($iterator as $page) {
            if ($iterator->isCurrentPage()) {
                $html .= '<li>
                    <strong><a href="' . $this->query($page) . '">' . $page . '</a></strong>
                </li>';
            } else {
                $html .= '<li>
                    <a href="' . $this->query($page) . '">' . $page . '</a>
                </li>';
            }
        }

        $html .= '</ul>';

        return $html;
    }

    protected function query($page)
    {
        return '?page=' . $page;
    }
}
