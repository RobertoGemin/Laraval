@extends('vendor.main')

@section('title','| home' )

@section('content')
    @include('message.showmessage')

<div class="row">
    <div class="col-md-10">
        <h1>All Post</h1>
    </div>
    <div class="col-md-2">
        <a href= "/posts/create"  class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create</a>
    </div>
    <div class="col-md-12">
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body </th>
                <th>Created at</th>
                <th></th>

                </thead>
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post -> id}}</th>
                        <td>{{$post -> title}}</td>
                        <td>{{substr($post -> body,0,50)}}{{strlen($post -> body )>50?"..":" " }}
                     </td>
                        <td>{{$post -> created_at-> diffForHumans() }}
                            {{($post -> created_at == $post -> updated_at ? '' : 'Post is Updated')                            }}</td>
                        <td><a href="{{route('posts.show',$post ->id)}}" class="btn btn-default btn-sm"> View </a>
                            <a href ="{{route('posts.edit',$post ->id)}}" class="btn btn-default btn-sm">Edit</a>
                         </td>
                    </tr>
                @endforeach
            </table>
            <div class="text-center">
              {{ $posts->links() }}
            </div>

        </div>
    </div>

</div>

@endsection