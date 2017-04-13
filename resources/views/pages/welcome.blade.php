@extends('vendor.main')

@section('title','| welcome')



@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p class="lead">Thank you for visting</p>
                    <p><a class="btn btn-primary btn-lg" href= " posts/"  role="button">Populair post</a></p>
        </div>
    </div>
</div><!-- !-- end off .row  -->
<div class="row ">
    <div class="col-md-8">
        @foreach($posts as $post)
        <h3>{{$post ->title}} </h3>
        <p> {{substr($post -> body,0,50)}}{{strlen($post -> body )>50?"..":" " }}</p>

        <a href="{{url( 'blog',$post ->slug)}}"
                                   class="btn btn-primary"> Read More</a>
        <hr>
        @endforeach

    </div>
</div>



@endsection