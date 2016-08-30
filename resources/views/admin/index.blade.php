@extends('dashboard.layouts.master')

   @section('admin-content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


             @if(Session::has('edit_msg'))
                <div class="alert alert-success">
                    {{Session::get('edit_msg') }}
                </div>
            @endif

            @if(Session::has('update_msg'))
                <div class="alert alert-warning">
                    {{Session::get('update_msg') }}
                </div>
            @endif


            @if(Session::has('delete_msg'))
                <div class="alert alert-danger">
                    {{Session::get('delete_msg') }}
                </div>
            @endif
          
          <h2 class="h2">All Blogs</h2>

              <div class="post-preview">

              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($blogs as $blog)
                <tbody>
               
                  <tr>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->description}}</td>
                    <td> <div class="pull-right btn-group">
                            <small><a class="btn btn-xs btn-warning" href="admin/blogs/{{$blog->id}}/edit">Edit</a>
                            </small>
                       

                    <form method="post" action="admin/blogs/{{$blog->id}}" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <input type="hidden" name="_method" value="DELETE">
                              <button type="submit">Delete</button>
                        </form>
                      
                        </div></td>
                  </tr>
               
                </tbody>
                @endforeach
              </table>
                    
                        
                    </a>
                 -->
                </div>
            
              <hr>


            </div>
        </div>
    </div>
<!--  -->
    <hr>

    @stop
    

  <style>
    .container{
      background-color: white;
    }
    .h2{
      text-align: center;
    }

  </style>