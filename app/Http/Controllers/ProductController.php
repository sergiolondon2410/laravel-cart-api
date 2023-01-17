<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    
    public function index(){
        
        //$response = Http::get('https://fakestoreapi.com/products');
        $response = Http::get('https://fakestoreapi.com/products/', [
            'limit' => 3,
            'sort' => 'desc'
        ]);
        dd($response->json());
        
    }
}
