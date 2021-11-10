<?php

use App\Http\Controllers\SubscribeController;
use App\Http\Livewire\About;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Contact as ContactAlias;
use App\Http\Livewire\Donate as DonateAlias;
use App\Http\Livewire\Messages;
use App\Http\Livewire\Volunteer as VolunteerAlias;
use App\Http\Livewire\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use Newsletter;

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



Route::get('/',Welcome::class)->name('welcome');


//Route::post('/subscribe',[SubscribeController::class,'store'])->name('subscribe');
//Route::post('/subscribe',function (Request $request){
//    dd($request->email)
//    (new Spatie\Newsletter\Newsletter)->subscribe($request->email,[]);
//})->name('subscribe');

Route::get('/posts',Blog\Index::class)->name('blog_index');
Route::get('/posts/{post}',Blog\Show::class)->name('show');


Route::get('/contact', ContactAlias::class)->name('contact');
Route::get('/volunteer', VolunteerAlias::class)->name('volunteer');
Route::get('/donate', DonateAlias::class)->name('donate');
Route::get('/about', About::class)->name('about');
Route::get('/messages', Messages::class)->name('messages');
