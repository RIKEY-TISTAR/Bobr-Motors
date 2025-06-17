<?php

use App\Livewire\PageCategoryProduct;
use App\Livewire\PageContacts;
use App\Livewire\PageForm;
use App\Livewire\PageFormFinished;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\PageProductsBrands;
use App\Livewire\SingleProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PageHome::class)->name('page.home');
Route::get('/products', PageProducts::class)->name('page.products');
Route::get('/products-brand', PageProductsBrands::class)->name('page.products-brand');
Route::get('/products/{slug}/show', SingleProduct::class)->name('single.product');
Route::get('/products/{slug}', SingleProduct::class)->name('single.products');
Route::get('/products/{category_id}/category', PageCategoryProduct::class)->name('page.category-product');
Route::get('/form', PageForm::class)->name('page.form');
Route::get('/form-finished', PageFormFinished::class)->name('page.form-finished');


// Route::post('/contacts/submit', function () {
//     return Request::all();
// })->name('contact-form');