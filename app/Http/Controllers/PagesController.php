<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

  public function getIndex() {
    $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout() {
    $first = 'Tim';
    $last = "Jung";
    $full = $first . " " . $last;
    $email = "gentleresolve360@gmail.com";
    $data = [];
    $data['fullname'] = $full;
    $data['email'] = $email;
    return view('pages.about')->withData($data);
  }

  public function getContact(){
    return view('pages.contact');
  }
}
