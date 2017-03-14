<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogs;
use App\Products;


class ProductController extends Controller
{
    public function getCatalog($id=null){
        $products=Products::where('catalogs_id', $id)
                  ->where('showhide', 'show')
                  ->orderBy('id', 'DESC')
                  ->paginate(10);
        
        
        
        return view('products')->with('products', $products);
    }
    
    public function getProduct($id=null){
        $product=Products::find($id);
        return view('product')->with('product', $product);
    }
}
