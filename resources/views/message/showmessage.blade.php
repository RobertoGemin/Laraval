
@if(Session::has('succes'))
    <div class="alert alert-success" role="alert">post is made</div>

       @endif


@if(Session::has('delete'))
    <div class="alert alert-success" role="alert">post is deleted</div>
@endif

@if(Session::has('update'))
    <div class="alert alert-success" role="alert">post is update</div>

@endif

