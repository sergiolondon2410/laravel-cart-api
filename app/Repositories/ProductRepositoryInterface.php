<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    
    public function get($product_id);

    public function all();

}