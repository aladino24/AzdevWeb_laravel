<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;



Route::get('/', function () {
    return view('includes.home');
});





Route::get('/posts', [PostController::class, 'index']);


//Halaman Single Post (wildcard)

Route::get('/post/{post:slug}',[PostController::class, 'show'] );


Route::get('/videos', function () {
    return view('posts.videos',[
        'posts' => Post::all(),
        'categories' => Category::all(),
        'sidebar' => Post::latest()->get()

    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts.posts',[
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','user'),
        'category' => $category->name,
        'categories' => Category::all(),
        // "posts" => Post::all(),
        'sidebar' => Post::latest()->get()
    ]);
});
//Route Login
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

//Route Registrasi
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');

//Route untuk menangkap data
Route::post('/register',[RegisterController::class, 'simpan']);

Route::get('/categories', function () {
    return view('posts.categories',[
        'title' => 'Kategori Artikel',
        // 'posts' => Post::all(),
        'categories' => Category::all(),
        'sidebar' => Post::latest()->get()
    ]);
});


//Route Halaman dashboard
Route::get('/dashboard/beranda',function(){
    return view('dashboard.layout.menu.dashboard',[
        'jumlahAkun' => User::count(),
        'postingan' => Post::where('user_id',auth()->user()->id)->latest()->paginate(6),
        // 'date' => Carbon::now()->toDateTimeString()
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/autoSlug', [DashboardPostController::class, 'autoSlug'])
->middleware('auth');
//Buat Artikel baru
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');



// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts.posts',[
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category','user'),
//         'categories' => Category::all(),
//         'sidebar' => Post::latest()->get()
//     ]);
// });
