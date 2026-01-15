<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerAuthController;






// TAMPILKAN DAFTAR DAN DETAIL PRODUK
Route::get('home', [ProductController::class, 'index'])->name('home');
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.show');




// TAMBAH DAN LIHAT ORDERAN
Route::get('/pesan/create/{id}', [OrderController::class, 'create'])->name('order.create');
Route::post('/pesan/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');


//UNTUK LOGIN DAN REGISTER PELANGGAN
Route::get('/customer/login', [CustomerAuthController::class, 'showLogin'])->name('customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'loginCustomer']);
Route::get('/customer/register', [CustomerAuthController::class, 'showRegister']);
Route::post('/customer/register', [CustomerAuthController::class, 'register']);
Route::post('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');







// MENAMPILKAN DASHBOARD UTAMA
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');





// UNTUK CRUD PRODUK
Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::post('dashboard/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/produk/{id}', [DashboardController::class, 'destroyProduk'])->name('dashboard.produk.destroy');





// UNTUK CRUD DAN CETAK RECEIPT PESANAN
Route::get('/dashboard/pesanan', [DashboardController::class, 'pesanan'])->name('dashboard.pesanan');
Route::get('/dashboard/pesanan/create', [DashboardController::class, 'createPesanan'])->name('dashboard.pesanan.create');
Route::post('/dashboard/pesanan/store', [DashboardController::class, 'storePesanan'])->name('dashboard.pesanan.store');
Route::get('/dashboard/pesanan/{id}/edit', [DashboardController::class, 'editPesanan'])->name('dashboard.pesanan.edit');
Route::put('/dashboard/pesanan/{id}', [DashboardController::class, 'updatePesanan'])->name('dashboard.pesanan.update');
Route::delete('/dashboard/pesanan/{id}', [DashboardController::class, 'destroyPesanan'])->name('dashboard.pesanan.destroy');
Route::get('/admin/orders/{id}/receipt', [OrderController::class, 'receipt'])->name('orders.receipt');





// UNTUK CRUD MEMBER
Route::get('/dashboard/member', [DashboardController::class, 'memberIndex'])->name('dashboard.member.index');
Route::get('/dashboard/member/create', [DashboardController::class, 'memberCreate'])->name('dashboard.member.create');
Route::post('/dashboard/member/store', [DashboardController::class, 'memberStore'])->name('dashboard.member.store');
Route::get('/dashboard/member/{id}/edit', [DashboardController::class, 'memberEdit'])->name('dashboard.member.edit');
Route::put('/dashboard/member/{id}/update', [DashboardController::class, 'memberUpdate'])->name('dashboard.member.update');
Route::delete('/dashboard/member/{id}', [DashboardController::class, 'memberDestroy'])->name('dashboard.member.destroy');



Route::get('/dashboard/admin', [DashboardController::class, 'adminIndex'])->name('dashboard.admin.index');
Route::get('/dashboard/admin/create', [DashboardController::class, 'adminCreate'])->name('dashboard.admin.create');
Route::post('/dashboard/admin/store', [DashboardController::class, 'adminStore'])->name('dashboard.admin.store');
Route::get('/dashboard/admin/{id}/edit', [DashboardController::class, 'adminEdit'])->name('dashboard.admin.edit');
Route::put('/dashboard/admin/{id}/update', [DashboardController::class, 'adminUpdate'])->name('dashboard.admin.update');
Route::delete('/dashboard/admin/{id}', [DashboardController::class, 'adminDestroy'])->name('dashboard.admin.destroy');


// LIHAT PENDAPATAN TABLE DAN EXPORT KE EXCEL 
Route::get('/dashboard/pendapatan', [DashboardController::class, 'pendapatan'])->name('dashboard.pendapatan');
Route::get('/pendapatan/export-excel', [DashboardController::class, 'exportPendapatanExcel'])->name('pendapatan.export.excel');





// LIHAT PENDAPATAN BAR CHART
Route::get('/dashboard/pendapatan/chart', [DashboardController::class, 'pendapatanChart'])->name('dashboard.pendapatan.chart');






// UNTUK LOGIN DAN LOGOUT ADMIN
Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');











