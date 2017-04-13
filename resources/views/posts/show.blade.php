@extends('vendor.main')

@section('title','| Create New Post' )

@section('content')

    @include('message.showmessage')
    <div class="row">
    <div class="col-md-8">
        <h1> {{$post -> title}} </h1>
        <p class="lead">{{$post -> body}}</p>
        <hr>

        <ul class="list-group">
        @foreach( $post ->comments as $comment)
                <article>
                <strong>
                    {{ $comment->created_at-> diffForHumans()}} : &nbsp;

                </strong>
                    {{ $comment->body }}
                </article>
        @endforeach
        </ul>
    </div>



    <div class="col-md-4">
        <div class="well">


            <dl class="dl-horizontal">
                <lable>Url: </lable>
                <p><a href = "{{ route('blog.single',$post->slug)}}"> {{url('blog',$post -> slug)}}</a></p>

            </dl>

            <dl class="dl-horizontal">
                <label>Create at: </label>
                <p>{{date('M j, Y H:i',strtotime($post -> created_at))}}</p>
            </dl>

            <dl class="dl-horizontal">
                <label>Last update:  </label>
                <p>{{date('M j, Y H:i',strtotime($post -> updated_at))}}   </p>
            </dl>

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href ="{{route('posts.edit',$post ->id)}}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col-sm-6">
                        <a href ="{{route('posts.destroy',$post ->id)}}" class="btn btn-danger btn-block">Delete</a>

                </div>

                <hr>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href =" {{route('posts.index')}}" class="btn btn-default btn-block">See als post</a>
                    </div>
                </div>



    </div>


</div>










@endsection