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
@if(Session::has("update_status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("update_status")!!}</span>
    </div>
@endif
@if(Session::has("delete_status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("delete_status")!!}</span>
    </div>
@endif
@if(Session::has("create_status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("create_status")!!}</span>
    </div>
@endif
@if(Session::has("calendar_event_status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("calendar_event_status")!!}</span>
    </div>
@endif
@if(Session::has("quote_create_status"))
    <div class="alert alert-info">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <span>{!!Session::get("quote_create_status")!!}</span>
    </div>
@endif
