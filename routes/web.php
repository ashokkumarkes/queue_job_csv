<?php
// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\User;
use App\Jobs\SendMail;

use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
//     $user_id = User::findOrFail(2);
//     // ProcessPodcast::dispatch($podcast)
//     // ->delay(now()->addMinutes(10));
//     // dispatch(function(){
//     //     $name = 'Cloudways';
//     //     Mail::to('ashok.chaudhary@kssboxoffice.com')->send(new TestMail($name));
//     // })->delay(now()->addSecond(5));
//         // dispatch(new \App\Jobs\SendMail($user_id))->delay(now()->addSecond(5));

//        SendMail::dispatch($user_id)->delay(now()->addSecond(5));

//     // return 'Email sent Successfully';
    return view('welcome');
 });

Route::get('datatype','SalesCsvController@uploadData');



Route::get('/upload', [SalesController::class, 'index']);
Route::post('/upload',[SalesController::class, 'upload'])->name('upload');
Route::get('/batch', [SalesController::class, 'batch']);
Route::get('/batch/in-progress', [SalesController::class, 'batchInProgress']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
