<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
Use App\Comment;

class CommentsController extends Controller
{
    //

    public function store(Post $post)
    {

        //$post ->addComment(request('body'));
      //  $comments  = new Comment;
     //   $comments ->  body = request('title');
       // $comments -> post_id = $post->id

      //  Session::flash('succes','The blog post was successfully save ');

      //  $comments ->save();




        return back();
    }









}
