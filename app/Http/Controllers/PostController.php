<?php

namespace App\Http\Controllers;

use App\Post;
use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Post::orderBy('created_at', 'desc')->get(['id', 'title', 'partial', 'slug', 'image_small', 'created_at'])->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->partial = $request->input('text');
        $post->text = $request->input('text');
        $post->user_id = 1;
        if ($post->save()) {
            Session::flash('message', 'Пост успешно создан');
        } else {
            Session::flash('error', 'Ошибка при создании поста');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Post::where('id', $id)->get(['id', 'title', 'text', 'image_large', 'created_at'])->jsonSerialize(), Response::HTTP_OK);
    }

    public function showBySlug($slug)
    {
	$post = Post::where('slug', $slug)->get(['id', 'title', 'text', 'image_large', 'created_at']);
	
	if ($post->count()) {	
            return response($post->jsonSerialize(), Response::HTTP_OK);
        } else {
    	    $post = [ 'error' => 'Not found' ];
    	    return response($post, Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $post_id = Post::where('slug', $post->slug)->first()['id'];

        $post= Post::find($post_id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->text = $request->input('text');
        if ($post->save()) {
            Session::flash('message', 'Пост успешно изменён');
        } else {
            Session::flash('error', 'Ошибка при изменении поста');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Post::where('id', $post_id);

        if($post) {
            $post->delete();
        } else {
            Session::flash('error', 'Ошибка при удалении поста');
        }
    }

    public function sitemap()
    {
        $posts = Post::orderBy('updated_at', 'asc')->get();
        $contact = Contact::orderBy('updated_at', 'desc')->first(['updated_at']);
        $index = filemtime(resource_path('js/views/IndexPage.vue'));

        return view('sitemap')->with(compact(['posts', 'contact', 'index']));
    }
}
