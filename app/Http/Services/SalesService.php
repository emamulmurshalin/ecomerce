<?php


namespace App\Http\Services;


use App\Http\Repository\SalesRepository;

class SalesService
{
    public  $repository;

    function __construct(SalesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        return $this->repository->storeSales($data);
    }
}
