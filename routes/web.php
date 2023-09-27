<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Blog\Blogs;
use App\Livewire\Blog\Create;
use App\Livewire\Blog\Edit;
use App\Livewire\Blog\Viewer;
use App\Livewire\Gallery\Gallery;
use App\Livewire\Gallery\Images;
use App\Livewire\Gallery\Viewer as GalleryViewer;
use App\Livewire\Gallery\Viewer2;
use App\Livewire\Home\Dashboard;
use App\Livewire\Home\Home;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', Home::class);

Route::get('/dashboard', Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blogs
    Route::middleware('admin')->group(function () {
        Route::get("/home/blogs/create", Create::class);
        Route::post("/home/blogs/create", [App\Http\Controllers\BlogController::class, 'createBlog'])->name("home.blogs.create");
        Route::get("/home/blogs/edit/{id}", Edit::class);
        Route::POST("/home/blogs/update", [App\Http\Controllers\BlogController::class, 'updateBlog'])->name("home.blogs.update");
        Route::POST("/home/blogs/delete", [App\Http\Controllers\BlogController::class, 'deleteBlog'])->name("home.blogs.delete");

        Route::get("/home/gallery", Gallery::class);
        Route::get("/home/gallery/{gallery_id}", Images::class);
    });
});

//Blogs
Route::get("/blogs", Blogs::class);
Route::get("/blogs/{id}/viewer", Viewer::class);

//Gallery Viewer
Route::get("/gallery/viewer", GalleryViewer::class);
Route::get("/gallery/viewer/{gallery_id}", Viewer2::class);

require __DIR__ . '/auth.php';
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
