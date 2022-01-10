<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;




class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('dashboard.layout.menu.tampilPost',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layout.menu.createPost',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|max:170',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'

        ]);

        if ($request->file('image')) {
            $validasi['image'] = $request->file('image')->store('PostImage');
        }

        $validasi['user_id'] = auth()->user()->id;
        $validasi['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Post::create($validasi);

        return redirect('/dashboard/posts')->with('berhasil','Artikel baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if ($post->user->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.layout.menu.detailPost',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.layout.menu.editPost',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:170',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if ($post->user->id !== auth()->user()->id) {
            abort(403);
        }

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validasi = $request->validate($rules);

        $validasi['user_id'] = auth()->user()->id;
        $validasi['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Post::where('id', $post->id)->update($validasi);

        return redirect('/dashboard/posts')->with('berhasil','Artikel berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        Post::destroy($post->id);

        Alert::success('Success', 'Data berhasil dihapus');

        return redirect('/dashboard/posts');
    }


    public function autoSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
