<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    /*protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }*/

    
    public function index()
    {
        
        $response = Http::get('https://fakestoreapi.com/products');
        return $response->json();
        //$data = $this->productRepository->all();
        //dd($data);
    }

    public function store($request)
    {
        return $request;
    }
}
