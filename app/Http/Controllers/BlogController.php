<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use App\Models\Blog;

/**
* 
*/
class BlogController extends Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function index(){
		return view('blog.index');
	}
	public function contact(){
		return view('blog.contact');
	}
	public function newpost(){
		return view('blog.newpost');
	}
	 // public function admin(){
	 // 	return view('admin.admin');
	 // }
	
}