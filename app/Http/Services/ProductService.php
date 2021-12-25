<?php


namespace App\Http\Services;


use App\Http\Repository\ProductRepository;

class ProductService
{
    public  $repository;

    function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        $this->repository->storeProduct($data);
    }
}
