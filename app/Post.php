<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{

    public   function comments()
    {
        return $this ->hasMany(Comment::class);

    }

   public function addComment($body)
   {
       // $this->comments()->create(compact('body'));


   }




    //
    //protected $guearded = [];
   // protected  $fillable = ['title','body'];
}
