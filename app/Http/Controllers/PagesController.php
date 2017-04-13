<?php

namespace App\Http\Controllers;
use App\Post;
class PagesController extends  Controller{
    public function getIndex(){

        $posts =Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.welcome',compact('posts'));
    }




    public function getAbout(){
        $first = 'Roberto';
        $last = 'Gemin';
        $fullname =$first . " " . $last;
        $email ="email.com";
        $data =[];
        $data['email'] = $email;
        $data['fullname'] = $fullname;


        return view('pages.about') -> withData($data);
    }
    public function getContact()
    {
        return view('pages.contact');
    }




}