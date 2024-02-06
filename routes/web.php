<?php


use App\Http\Controllers\PropertyController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});



/////////////////
Route::get('/property/agents', function () {
    return view('property.agents');
})->name('property.agents');

Route::get('/property/types', function () {
    return view('property.types');
})->name('property.types');

Route::get('/property/list', function () {
    return view('property.list');
})->name('property.list');

// Route::get('/property/show', function () {
//     return view('property.show');
// })->name('property.show');
/////////////////////
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
/////////////////////

Route::get('/property/create', function () {
    return view('property.create');
})->name('property.create');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {  



Route::get('/property/list', [PropertyController::class,'index'])->name('property.list');
Route::post('/post', [PropertyController::class , 'store']);
Route::post('/remove', [PropertyController::class, 'x_removeProperty'])->name('x_removeProperty');
Route::get('/property/show/{property}', [PropertyController::class, 'show'])->name('property.show');
Route::get('/property/edit/{property}', [PropertyController::class, 'edit'])->name('property.edit');
Route::put('/property/update/{property}', [PropertyController::class, 'update'])->name('property.update');

 });








