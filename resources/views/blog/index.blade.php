    @extends('layouts.master')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($blogs as $blog)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{$blog->title}}
                        </h2>
                        <div class="pull-right">
                        <a href="article/edit/{{$blog->id}}" class="btn btn-primary">Edit</a>
                        <a href="article/delete/{{$blog->id}}" class="btn btn-danger">delete</a>

                    </div>
                        @if(!empty($blog->image))
                        <img src="/uploads/{{$blog->image}}" alt="" width="500px" height="200px" />
                        @endif
                        <h3 class="post-subtitle">
                            {{$blog->description}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{$blog->username}}</a> {{$blog->crated_at}}</p>
                    
                </div>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
    @stop
