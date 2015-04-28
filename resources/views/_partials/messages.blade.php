@if(Session::has("welcome"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("welcome")!!}</span>
    </div>
@endif
@if(Session::has("status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("status")!!}</span>
    </div>
@endif
