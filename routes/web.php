<?php
use App\Http\Controllers\DentaireController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/appointment', function () {
    return view('appointment');
});

/* Admin page */
Route::prefix('admin')->group(function () {
    Route::view('/login', 'admin.login'); // Accessible sans authentification
    Route::post('/login_post', [DentaireController::class, 'login_post'])->name('login_post'); // Accessible sans authentification

    Route::middleware([AuthMiddleware::class])->group(function () {
        Route::view('/', 'admin.home'); // Protégé par AuthMiddleware
        Route::get('/logout', [DentaireController::class, 'logout'])->name('logout'); // Protégé par AuthMiddleware
    });
});
