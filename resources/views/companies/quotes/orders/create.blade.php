@extends("layouts.master-auth")
@section("profile-warning")
      <section id="main-content">
@include("_partials.errors")
          <section class="wrapper">
        </section>
    </section>
        <section class="panel col-md-8 col-md-offset-2">
<br>
        <p class="lead">Main Contact Information</p>
<br>
            {!!Form::open(["url"=>"/companies/profile/create","method"=>"POST","class" => "order-form form-inline"])!!}
        <div class="form-group order-input">
                {!!Form::label("name*")!!}
                {!!Form::text("name",$customer["name"],["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("phone*")!!}
                {!!Form::text("phone",$customer["phone"],["class" => "form-control"])!!}
        </div>
        <div class="form-group order-input">
                {!!Form::label("email*")!!}
                {!!Form::text("email",$customer["email"],["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("quote_id*")!!}
                {!!Form::text("quote_id",$quote["quote_id"],["class" => "form-control"])!!}
        </div>
<br>
<br>
        <p class="lead">Pickup Transportation Information (to be implemented ...)</p>
        
                {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
<br>
            {!!Form::close()!!}
<br>
<br>

        </section>
@stop
