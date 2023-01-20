<?php

namespace App\Services\Product;

use Illuminate\Support\Facades\Http;

class GetProductService
{
    protected $url = 'https://fakestoreapi.com/products/';

    public function all()
    {
        $response = Http::get($this->url);
        return $response->json();
    }

    public function get(int $id)
    {
        $query = $this->url . $id;
        $response = Http::get($query);
        return $response->json();
    }
}