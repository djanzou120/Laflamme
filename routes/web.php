<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Models\Agency;
use App\Models\Article;
use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/blog', function () {
    return view('pages.blog.list')->with(array('posts'=>Article::orderBy('created_at', 'desc')->paginate(16),
        'last_post' => Article::orderBy('created_at', 'desc')->first()));
})->name('blog');

Route::get('/blog/article/detail/{post}', function ($request) {
    return view('pages.blog.detail')->with(array('post' => Article::find($request)));
})->name('blog.article.detail');

/************************************* FORUM ROUTE ********************************************************/
Route::get('/forum', 'App\Http\Controllers\ForumController@listSubject')->name('forum');
Route::get('/forum/detail/{id}', 'App\Http\Controllers\ForumController@subjectDetail')->name('forum.detail');
Route::post('/createSubject', 'App\Http\Controllers\ForumController@addSubject');
Route::post('/addComment', 'App\Http\Controllers\ForumController@addComment');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
Route::post('/contact/create', 'App\Http\Controllers\ContactController@store')->name('create.contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/add/subject', function () {
    return view('pages.forum.addsubject');
})->name('addSubject');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
