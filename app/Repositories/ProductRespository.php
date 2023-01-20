<?php

namespace App\Repositories;

//use App\Repositories\ProductRepositoryInterface;
//use Illuminate\Support\Facades\Http;

class ProductRepository implements ProductRepositoryInterface
{

    //protected $url = 'https://fakestoreapi.com/products/';
    
    public function all()
    {
        //$response = Http::get($this->url);
        //$collection = collect(json_decode($response->json(), true));
        $collection = collect(["id" => "10", "title" => "SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s"]);
        return $collection;
    }

    public function get($id)
    {
        //$query = $this->url . $id;
        //$response = Http::get($query);
        //$collection = collect(json_decode($response->json(), true));
        $collection = collect(["id" => "10", "title" => "SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s"]);
        return $collection;
    }
}