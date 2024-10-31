<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
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
Route::get('/kesanland', function () {
    return view('kesanland');
});
Route::get('/kesan', function () {
    return view('kesanentertaiment');
});
Route::get('/bisnis', function () {
    return view('bisnis');
});
Route::get('/detailbisnis', function () {
    return view('detailbisnis');
});
Route::get('/tentang', function () {
    return view('tentang');
});
// Route::get('/login', function () {
//     return view('login');
// });
// livewire
// Route::get('/counter', Counter::class);
Route::get('/counter',App\Livewire\Counters\index::class)->name('counter');
Route::get('/tambah-counter', App\Livewire\Counters\create::class)->name('tambah-counter');
Route::get('/edit-counter/{id}', App\Livewire\Counters\Edit::class)->name('edit-counter');

Route::group(['middleware' => 'guest'], function(){

    //register
    // Route::livewire('/register', 'auth.register')->layout('layouts.app')->name('auth.register');

    //login
    Route::get('/login', App\Livewire\Auth\login::class)->name('login');

});

Route::group(['middleware' => 'auth'], function(){
    //dashboard
    Route::get('/admin/dashboard',  App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    // business
    Route::get('/admin/business',  App\Livewire\Admin\Business\Index::class)->name('admin.business.index');
    Route::get('/admin/business/create',  App\Livewire\Admin\Business\Create::class)->name('admin.business.create');
    Route::get('/admin/business/edit/{id}', App\Livewire\Admin\Business\Edit::class)->name('admin.business.edit.{id}');

    // clients
    Route::get('/admin/clients',  App\Livewire\Admin\Clients\Index::class)->name('admin.clients.index');
    Route::get('/admin/clients/create',  App\Livewire\Admin\Clients\Create::class)->name('admin.clients.create');
    Route::get('/admin/clients/edit/{id}', App\Livewire\Admin\Clients\Edit::class)->name('admin.clients.edit.{id}');

    // projects 
    Route::get('/admin/projects',  App\Livewire\Admin\Projects\Index::class)->name('admin.projects.index');
    Route::get('/admin/projects/create',  App\Livewire\Admin\Projects\Create::class)->name('admin.projects.create');
    Route::get('/admin/projects/edit/{id}', App\Livewire\Admin\Projects\Edit::class)->name('admin.projects.edit.{id}');
    
    // events
    Route::get('/admin/events',  App\Livewire\Admin\Events\Index::class)->name('admin.events.index');
    Route::get('/admin/events/create',  App\Livewire\Admin\Events\Create::class)->name('admin.events.create');
    Route::get('/admin/events/edit/{id}', App\Livewire\Admin\Events\Edit::class)->name('admin.events.edit.{id}');
    
    // galleries
    Route::get('/admin/gallery',  App\Livewire\Admin\Galleries\Index::class)->name('admin.gallery.index');
    Route::get('/admin/gallery/create',  App\Livewire\Admin\Galleries\Create::class)->name('admin.gallery.create');
    
    // positions
    Route::get('/admin/positions',  App\Livewire\Admin\Positions\Index::class)->name('admin.positions.index');
    Route::get('/admin/positions/create',  App\Livewire\Admin\Positions\Create::class)->name('admin.positions.create');
    Route::get('/admin/positions/edit/{id}', App\Livewire\Admin\Positions\Edit::class)->name('admin.positions.edit.{id}');
    
    // teams
    Route::get('/admin/teams',  App\Livewire\Admin\Teams\Index::class)->name('admin.teams.index');
    Route::get('/admin/teams/create',  App\Livewire\Admin\Teams\Create::class)->name('admin.teams.create');
    Route::get('/admin/teams/edit/{id}', App\Livewire\Admin\Teams\Edit::class)->name('admin.teams.edit.{id}');
    
    // news
    Route::get('/admin/news',  App\Livewire\Admin\News\Index::class)->name('admin.news.index');
    Route::get('/admin/news/create',  App\Livewire\Admin\News\Create::class)->name('admin.news.create');

    // categories
    Route::get('/admin/categories',  App\Livewire\Admin\Categories\Index::class)->name('admin.categories.index');
    Route::get('/admin/categories/create',  App\Livewire\Admin\Categories\Create::class)->name('admin.categories.create');
    Route::get('/admin/categories/edit/{id}', App\Livewire\Admin\Categories\Edit::class)->name('admin.categories.edit.{id}');
});

    // home
    Route::get('/', App\Livewire\Guest\Home::class)->name('home');
    
    // business
    Route::get('/business', App\Livewire\Guest\Business::class)->name('business');
    Route::get('/business/show/{id}', App\Livewire\Guest\Business\Show::class)->name('business.show.{id}');
    
    // events
    Route::get('/events', App\Livewire\Guest\Events\Index::class)->name('events');
    Route::get('/events/show/{id}', App\Livewire\Guest\Events\Show::class)->name('events.show.{id}');
    Route::get('/events/show/detail/{id}', App\Livewire\Guest\Events\Detail::class)->name('events.show.detail.{id}');
    
    // news
    Route::get('/news', App\Livewire\Guest\News\Index::class)->name('news');
    Route::get('/news/show/{id}', App\Livewire\Guest\News\Show::class)->name('news.show.{id}');
    
    // about
    Route::get('/about', App\Livewire\Guest\About\Index::class)->name('about');