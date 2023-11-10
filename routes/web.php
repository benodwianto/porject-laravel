<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/ben', function () {
    return "Hello Beno Dwianto";
});

Route::get('/beli', [BarangController::class, 'index']);
























Route::redirect('/yow', '/ben');

Route::view('/hello', ['name' => 'Beno']);
Route::get('/hello', function () {
    return view('hello', ['name' => 'Beno']);
});

Route::get('/products/{id}', function ($productId) {
    return "Product $productId";
})->name('product.detail');
Route::get('/products/{product}/items/{item}', function ($productId, $itemId) {
    return "Product $productId, Item $itemId";
});
Route::get('/controller/hello', ['HelloCobtroller@hello']);

Route::get('/input/hello', ['InputController::class', 'hello']);
Route::post('/input/hello', ['InputController::class', 'hello']);

Route::post('/input/hello/first', ['InputController::class', 'helloFirstName']);
