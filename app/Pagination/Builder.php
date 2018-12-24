<?php

namespace App\Pagination;

class Builder
{
    protected $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    public function paginate($page = 1, $perPage = 10)
    {
        $page = max(1, $page);

        $total = $this->builder->execute()->rowCount();
        dump($total);

        $result = $this->builder
                       ->setFirstResult(
                            $this->getFirstResultIndex($page, $perPage)
                        )
                       ->setMaxResults($perPage)
                       ->execute()
                       ->fetchAll();
    }

    protected function getFirstResultIndex($page, $perPage)
    {
        return ($page - 1) * $perPage;
    }
}
