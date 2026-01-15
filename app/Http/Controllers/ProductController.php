<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     public function index(Request $request) {
        
        $products = DB::table('products')
                     ->where('nama_produk', 'LIKE', '%'. $request->keyword.'%')
                     ->paginate(4);
                  
                    
        return view('index', compact('products'));
    }
    

    public function show($id) {
        $product = DB::table('products')->where('id', $id)->first();

        if (!$product) {
            abort(404, 'Data tidak ditemukan'); 
        }

        return view('products.show', compact('product'));
    }




}
