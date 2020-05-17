<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getBlog()
   {
      //$posts = Post::orderBy('created_at','desc')->limit(20)->get();
      return view('blog.index');//->withPosts($posts);
   }
     public function getAbout()
    {
        return view ('pages.about');
    }
    public function getContact()
    {
        return view ('pages.contact');
    }
}
