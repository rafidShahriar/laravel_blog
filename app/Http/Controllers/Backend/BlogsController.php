<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Article;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
     public function index()
      {
      
      $blogs = Article::all();
    	return view('admin.index')
        ->with(compact('blogs'));

      }


      public function edit($id)
    {
      $blog= Article::find($id);
      return view('admin.edit',compact('blog'));
     
     
    }

    public function update($id, Request $request)
     {
       
      $input= $request->except(['_token','_method']);
     
      if ($request->hasFile('image')) 
      {
         
      $filename =$request->file('image')->getClientOriginalName();
     
      $request->file('image')->move(public_path("uploads"),$filename);
      
      $input['image'] = $filename;
      
      }
       $m = 'Successfully updated';
      Article::where('id',$id)->update($input);
      return redirect("admin/blogs")
       ->with ('update_msg',$m);
    }


    public function destroy($id)
    {
        Article::destroy($id);
        $msgD= "Successfully delete";
        return redirect('admin/blogs')
        ->with ('delete_msg',$msgD);;
    }


}