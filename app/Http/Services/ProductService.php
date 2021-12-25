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
        return $this->repository->storeProduct($data);
    }
}
