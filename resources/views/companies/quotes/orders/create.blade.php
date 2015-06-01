@extends("layouts.master-auth")
@section("profile-warning")
      <section id="main-content">
@include("_partials.errors")
          <section class="wrapper">
        </section>
    </section>
        <section class="panel col-md-6 col-md-offset-3 profile-forms">
<br>
        <p class="lead">Please complete your profile to gain full access to application</p>
            {!!Form::open(["url"=>"/companies/profile/create","method"=>"POST","class" => "basic-profile"])!!}
                {!!Form::label("company_name")!!}
                {!!Form::text("company_name","",["class" => "form-control"])!!}
                {!!Form::label("dot_number")!!}
                {!!Form::text("dot_number","",["class" => "form-control"])!!}
                {!!Form::label("mc_number")!!}
                {!!Form::text("mc_number","",["class" => "form-control"])!!}
                {!!Form::label("logo")!!}
                {!!Form::text("logo","",["class" => "form-control"])!!}
                {!!Form::label("website")!!}
                {!!Form::text("website","",["class" => "form-control"])!!}
<br>
<br>
                {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
<br>
            {!!Form::close()!!}
<br>
<br>

        </section>
@stop
