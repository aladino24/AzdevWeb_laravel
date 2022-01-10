<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;



class PostController extends Controller
{
    public function index(){

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username',request('user'));
            $title = ' by ' . $user->name;
        }

        return view('posts.posts',[
            "title" => "Artikel" . $title,
            "sidebar" => Post::latest()->get(),
            "posts" => Post::latest()->filter(request(['search','category','user']))->paginate(7)->withQueryString(),
            "categories" => Category::all()

        ]);
    }

    public function show(Post $post){
        return view('posts.post',[
            "title" => "Detail Post",
            "post" =>  $post,
            "sidebar" => Post::latest()->get(),
            "posts" => Post::latest()->get(),
            'categories' => Category::all()
         ]);
    }

    // public function show_sidebar(){
    //     return view('posts.post',[
    //         "sidebar" => Post::latest()->get()
    //     ]);
    // }
}
