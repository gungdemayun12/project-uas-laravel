<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request) {
        $query = DB::table('products');

        if ($request->keyword) {
            $query->where('nama_produk', 'LIKE', '%' . $request->keyword . '%');
        }

        if ($request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        $products = $query->paginate(4)->withQueryString();

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
