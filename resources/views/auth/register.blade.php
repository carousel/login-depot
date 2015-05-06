@extends("layouts.master-auth");
@section("content")
@include("_partials.errors")
    <div class="container">
    {!!Form::open(["url"=>"auth/register","method"=>"POST","class"=>"form-signin"])!!}
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>

        {!!Form::label("username")!!}
        {!!Form::text("username","",["class"=>"form-control","placeholder"=>"enter your name"])!!}            
        {!!Form::label("email")!!}
        {!!Form::text("email","",["class"=>"form-control","placeholder"=>"enter your email"])!!}            
        {!!Form::label("password")!!}
        {!!Form::password("password",["class"=>"form-control","placeholder"=>"enter password"])!!}            
        {!!Form::label("password_confirmation")!!}
        {!!Form::password("password_confirmation",["class"=>"form-control","placeholder"=>"enter password again"])!!}            

            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="/auth/login">
                    Login
                </a>
            </div>

        </div>
        {!!Form::close()!!}


    </div>
@stop
