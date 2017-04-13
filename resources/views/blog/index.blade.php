@extends('vendor.main')

@section('title','| home' )

@section('content')
    @include('message.showmessage')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <h1>Blog</h1>
            </div>

        @foreach($posts as $post)

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{$post->title}}</h2>
                <h5>Published:{{ $post -> created_at-> toDayDateTimeString()}}</h5>
                <h6>{{($post -> created_at == $post -> updated_at ? '' : 'Post is Updated')}}</h6>
                  <p>{{$post->body}}</p>
              <p>  {{substr($post -> body,0,250)}}{{strlen($post -> body )>250?"..":" " }}</p>
                <a  class="btn btn-primary" href="{{ route('blog.single',$post->slug)}}">Read more</a>
            <hr>
            </div>

        </div>
        @endforeach
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-center"> {{ $posts->links() }}</div>

            </div>
        </div>

</div>

@endsection