<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    return view('pages.welcome');
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
