<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    // UNTUK CRUD PRODUK
    public function index(Request $request) {
        $product = DB::table('products')
                    ->where('nama_produk', 'LIKE', '%'. $request->keyword. '%')
                    ->get();
        return view('admin.index', compact('product'));
    }



      public function create() {
        return view('admin.create'); 
    }

    public function store(Request $request) {
        DB::table('products')->insert([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id) {
        $product = DB::table('products')->where('id', $id)->first();
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        DB::table('products')->where('id', $id)->update([
            'kategori' => $request->kategori,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Produk berhasil diperbarui!');
    }



    public function destroyProduk($id) {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }



    
    // UNTUK CRUD PESANAN
       public function pesanan(Request $request) {
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select(
                'orders.*',
                'products.nama_produk',
                'products.harga as harga_satuan',
                DB::raw('orders.jumlah * products.harga as total_harga')
            )
             ->where('nama_pemesan', 'LIKE', '%'. $request->keyword. '%')
            ->paginate(5);

        return view('admin.pesanan', compact('orders'));
    }


  

    public function createPesanan() {
        $products = DB::table('products')->get();
        return view('admin.create_pesanan', compact('products'));
    }

    public function storePesanan(Request $request) {
        DB::table('orders')->insert([
            'product_id' => $request->product_id,
            'nama_pemesan' => $request->nama_pemesan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'ukuran' => $request->ukuran,
            'jumlah' => $request->jumlah,
            'catatan' => $request->catatan,
            'status' => 'pending', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan!');
    }

    public function editPesanan($id) {
        $order = DB::table('orders')->where('id', $id)->first();
        return view('admin.edit_pesanan', compact('order'));
    }

    public function updatePesanan(Request $request, $id) {
        DB::table('orders')->where('id', $id)->update([
            'product_id' => $request->product_id,
            'nama_pemesan' => $request->nama_pemesan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'ukuran' => $request->ukuran,
            'jumlah' => $request->jumlah,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('dashboard.pesanan.create')->with('success', 'Pesanan berhasil diperbarui!');
    }

    public function destroyPesanan($id) {
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->route('dashboard.pesanan')->with('success', 'Pesanan berhasil dihapus!');
    }




        // UNTUK CRUD MEMBER
         public function memberIndex(Request $request) {
            $members = DB::table('customers')
                        ->where('username', 'LIKE', '%'. $request->keyword. '%')
                        ->get();
            return view('admin.member_index', compact('members'));
        }

        public function memberCreate() {
            return view('admin.member_create');
        }

        public function memberStore(Request $request) {
            DB::table('customers')->insert([
                'username'   => $request->username,
                'email'      => $request->email,
                'password'   => Hash::make($request->password), 
                'no_hp'      => $request->no_hp,
                'alamat'     => $request->alamat,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('dashboard.member.index')->with('success', 'Member berhasil ditambahkan!');
        }

        public function memberEdit($id) {
            $member = DB::table('customers')->where('id', $id)->first();
            return view('admin.member_edit', compact('member'));
        }

        public function memberUpdate(Request $request, $id) {
            DB::table('customers')->where('id', $id)->update([
            'username'   => $request->username,
            'email'      => $request->email,
            'no_hp'      => $request->no_hp,
            'alamat'     => $request->alamat,
            'updated_at' => now(),
        ]);


            return redirect()->route('dashboard.member.index')->with('success', 'Member berhasil diperbarui!');
        }

        public function memberDestroy($id) {
            DB::table('customers')->where('id', $id)->delete();
            return redirect()->route('dashboard.member.index')->with('success', 'Member berhasil dihapus!');
        }





        // UNTUK CRUD ADMIN
        public function adminIndex(Request $request) {
            $admins = DB::table('admins')
                        ->where('nama', 'LIKE', '%'. $request->keyword. '%')
                        ->get();
            return view('admin.admin_index', compact('admins'));
        }

        public function adminCreate() {
            return view('admin.admin_create');
        }

        public function adminStore(Request $request) {
            DB::table('admins')->insert([
                'nama'       => $request->nama,
                'email'      => $request->email,
                'password'   => Hash::make($request->password), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('dashboard.admin.index')->with('success', 'Admin berhasil ditambahkan!');
        }

        public function adminEdit($id) {
            $admin = DB::table('admins')->where('id', $id)->first();
            return view('admin.admin_edit', compact('admin'));
        }

       public function adminUpdate(Request $request, $id) {
            $data = [
                'nama'       => $request->nama,
                'email'      => $request->email,
                'updated_at' => now(),
            ];


            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->password);
            }

            DB::table('admins')->where('id', $id)->update($data);

            return redirect()->route('dashboard.admin.index')->with('success', 'Admin berhasil diperbarui!');
        }


        public function adminDestroy($id) {
            DB::table('admins')->where('id', $id)->delete();
            return redirect()->route('dashboard.admin.index')->with('success', 'Admin berhasil dihapus!');
        }




        //UNTUK PENDAPATAN 
    public function pendapatan() {
        $pendapatan = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.status', 'selesai')
            ->select(
                'orders.id',
                'products.nama_produk',
                'orders.jumlah',
                'products.harga as harga_satuan',
                DB::raw('orders.jumlah * products.harga as total_harga')
            )
            ->get();

        $totalPendapatan = $pendapatan->sum('total_harga');

        return view('admin.pendapatan', compact('pendapatan', 'totalPendapatan'));
    }






        // UNTUK EXPORT EXCEL
        public function exportPendapatanExcel() {
            $pendapatan = DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->where('orders.status', 'selesai')
                ->select(
                    'products.nama_produk',
                    'orders.jumlah',
                    'products.harga as harga_satuan',
                    DB::raw('orders.jumlah * products.harga as total_harga')
                )
                ->get();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'No');
            $sheet->setCellValue('B1', 'Produk');
            $sheet->setCellValue('C1', 'Jumlah');
            $sheet->setCellValue('D1', 'Harga');
            $sheet->setCellValue('E1', 'Total');

            $row = 2        ;
            $no = 1;

            foreach ($pendapatan as $p) {
                $sheet->setCellValue('A'.$row, $no++);
                $sheet->setCellValue('B'.$row, $p->nama_produk);
                $sheet->setCellValue('C'.$row, $p->jumlah);
                $sheet->setCellValue('D'.$row, $p->harga_satuan);
                $sheet->setCellValue('E'.$row, $p->total_harga);
                $row++;
            }

            $writer = new Xlsx($spreadsheet ); 
            $fileName = 'laporan_pendapatan.xlsx';

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$fileName.'"');

            $writer->save('php://output');
            exit;
        }





        // UNTUK PENDAPATAN BAR CHART
        public function pendapatanChart() {
            $data = DB::table('orders')
                            ->join('products', 'orders.product_id', '=', 'products.id')
                            ->select(
                                DB::raw('DATE(orders.created_at) as tanggal'),
                                DB::raw('SUM(orders.jumlah * products.harga) as total')
                            )
                            ->where('orders.status', 'selesai')
                            ->groupBy('tanggal')
                            ->orderBy('tanggal', 'asc')
                            ->get();

                        $labels = $data->pluck('tanggal');
                        $totals = $data->pluck('total');

                    return view('admin.pendapatan.chart', compact('labels', 'totals'));
                } 
        }




