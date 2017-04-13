@extends('vendor.main')

@section('title','| Create New Post' )

@section('content')

    <form method="post" action="/posts">
        {{csrf_field()}}
        <hr>
        <div class="form-group">
            <label for="title">Title  </label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>
        <div class="form-group">
            <label for="slug">Slug  </label>
            <input type="text" class="form-control" id="slug" name="slug" >
        </div>
        <div class="form-group">
            <label for="body">text</label>
            <textarea id="body" name="body" class="form-control" rows="3" ></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>


            <ul>
                @foreach ($errors -> all() as $error)
                    <div class="alert alert-danger">
                        <strong>Errors: </strong>
                    <li>{{ $error}}</li>
                    </div>
                @endforeach
            </ul>


    </form>



@endsection