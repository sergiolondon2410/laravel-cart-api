<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{   
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
