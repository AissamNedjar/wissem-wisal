<?php

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

Auth::routes(['verify' => false, 'register' => false, 'reset' => false, 'confirm' => false]);

Route::get('aissam', function () {
    $donors = \App\Models\Donor::all();
    foreach ($donors as $donor) {
        echo $donor->name . $donor->city . '<br>';
    }
});