    @extends('layouts.master')

    @section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form role="form" method="post" action="article/store">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class = "form-group">
                          <label for = "name">Title</label>
                          <input type = "text" class = "form-control" id = "name" placeholder = "Enter Name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                        </div>
                        <div class = "form-group">
                          <label for = "inputfile">File input</label>
                          <input type = "file" id = "inputfile" name="image">
                          <p class = "help-block">Select an Image</p>
                        </div>
                        <div class="form-group">
                          <label for="usr">User Name:</label>
                          <input type="text" class="form-control" id="usr" name="username">
                        </div>
                        <button type = "submit" class = "btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    @stop
