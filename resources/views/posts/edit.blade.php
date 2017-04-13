@extends('vendor.main')

@section('title','| edit  blog Post' )

@section('content')


<div class="row">
    <form method="POST" action="/posts/{{$post -> id}}">
         {{method_field("PATCH")}}
         {{csrf_field()}}
        <div class="col-md-8">
            <hr>
            <div class="form-group">
                <label for="title"> {{$post -> title}} Title:  </label>
                <input value="{{$post -> title}} " type="text" class="form-control" id="title" name="title"   >
            </div>

            <div class="form-group">
                <label for="slug"> {{$post -> slug}} slug:  </label>
                <input value="{{$post -> slug}} " type="text" class="form-control" id="slug" name="slug"   >
            </div>
            <div class="form-group">
                <label for="body">Text: </label>
                <textarea id="body" name="body" class="form-control" rows="3" > {{$post -> body}}</textarea>
            </div>

            <ul>
                @foreach ($errors -> all() as $error)
                    <div class="alert alert-danger">
                        <strong>Errors: </strong>
                        <li>{{ $error}}</li>
                    </div>
                @endforeach
            </ul>
        </div>


         <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create at: </dt>
                    <dd>{{date('M j, Y H:i',strtotime($post -> created_at))}}</dd>
                </dl>
            <dl class="dl-horizontal">
                <dt>Last update:  </dt> <dd>{{date('M j, Y H:i',strtotime($post -> updated_at))}}   </dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href ="/posts/{{$post ->id}} " class="btn btn-danger btn-block">cancel</a>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block ">edit</button>
                </div>
            </div>
         </div>
        </div>
    </form>
</div>

@endsection