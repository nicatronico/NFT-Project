<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

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
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/create_item', function(){
        return view('components.MyComponents.createitem');
    });
    

    Route::get('/home', function(){
        return view('myViews.index');
    });

    Route::get('/explore', function(){
        return view('components.MyComponents.explore');
    });


    Route::get('/item_detail', function(){
        return view('components.MyComponents.item-detail');
    });


    Route::get('/author_profile', function(){
        return view('components.MyComponents.author-profile');
    });

});



/*
Route::get('/create_item', function(){
    return view('components.MyComponents.createitem');
});
*/
Route::post('/upload', [ItemController::class,'store']);

require __DIR__.'/auth.php';
