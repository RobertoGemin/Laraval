<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $posts = Post::orderby('id','desc') -> paginate(5);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,array(
            'title'=>'required|max:255',
            'slug' =>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body'=>'required'
        ));
        $post = new Post;
        $post -> title = request('title');
        $post -> slug = request('slug');
        $post -> body = request('body');


        $post ->save();
        Session::flash('succes','The blog post was successfully save ');

        return view('posts.show',compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        //validate the data
            return view('posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        return view('posts.edit') -> withPost($post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

             $this ->validate($request,array(
            'title'=>'required|max:255',
            'slug' =>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body'=>'required'
        ));


        $post = Post::find($id);
        $post-> title = $request -> input('title');
        $post-> slug = $request -> input('slug');
        $post-> body = $request -> input('body');
        $post ->save();
        Session::flash('update','The blog post was update save ');
        return view('posts.show',compact('post'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('delete','post is delete');

        return  redirect('/');
    }
}
