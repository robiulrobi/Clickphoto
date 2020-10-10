<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
  public function index(){
      return view('frontEnd.home.home');
  }
  public function menuGallery(){
      return view('frontEnd.menu.galleryContent');
  }
  public function menuBlog(){
      return view('frontEnd.menu.blogContent');
  }
  
  public function menuAbout(){
      return view('frontEnd.menu.aboutContent');
  }
  
  public function menuContact(){
      return view('frontEnd.menu.contactContent');
  }
}
