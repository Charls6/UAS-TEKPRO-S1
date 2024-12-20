<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Route::get('/', function () {
//     return view('welcome');
// });
route::resource("",ProdukController::class);

route::get('/produk/receipt/{id}', [ProdukController::class, 'receipt'])->name('index.receipt');

route::get("/", [ProdukController::class, 'index'])->name('index.index');
route::get('/produk/create', [ProdukController::class, 'create'])->name('index.create');
route::post('/produk/store', [ProdukController::class, 'store'])->name('index.store');
route::get('/produk/edit{id}', [ProdukController::class, 'edit'])->name('index.edit');
route::put('/produk/update{id}', [ProdukController::class, 'update'])->name('index.update');
route::delete('/produk/delete{id}', [ProdukController::class, 'destroy'])->name('index.destroy');

// Route::get('/produk', function () {
//   return view('produk.index');
// });  
// Route::get('/produk', function () {
//     return view('produk.hello');
//   });