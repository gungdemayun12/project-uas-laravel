<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

  public function index() {
    
    $customerId = Auth::guard('customer')->id();

    $orders = DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select(
                    'orders.*',
                    'products.nama_produk',
                    'products.gambar',
                    'products.harga as harga_satuan',
                    DB::raw('orders.jumlah * products.harga as total_harga')
                )
                ->where('orders.customer_id', $customerId) 
                ->get(); 

    return view('order.index', compact('orders'));
}



      public function create($id) {
        $product = DB::table('products')->where('id', $id)->first();

        return view('order.create', compact('product'));
    }

   public function store(Request $request) {
    DB::table('orders')->insert([
        'customer_id'  => Auth::guard('customer')->id(), 
        'product_id'   => $request->product_id,
        'nama_pemesan' => $request->nama_pemesan,
        'no_hp'        => $request->no_hp,
        'alamat'       => $request->alamat,
        'ukuran'       => $request->ukuran,
        'jumlah'       => $request->jumlah,
        'catatan'      => $request->catatan,
        'status'       => 'pending',
        'metode_pembayaran' => 'cod',
        'created_at'   => now(),
        'updated_at'   => now(),
    ]);

    return back()->with('success', 'Pesanan berhasil dibuat!');
}   


    public function receipt($id)
    {
        $order = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select(
                'orders.*',
                'products.nama_produk',
                'products.harga as harga_satuan',
                DB::raw('orders.jumlah * products.harga as total_harga')
            )
            ->where('orders.id', $id)->first();

        if (!$order) {
            abort(404);
        }

        return Pdf::view('admin.orders.receipt', compact('order'))
            ->format('A6')
            ->name('receipt-order-'.$order->id.'.pdf');
    }



}
