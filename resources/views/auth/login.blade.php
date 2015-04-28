@extends("layouts.master-auth");

@section("content")
    <div class="container">
    @include("_partials.errors")
    @include("_partials.messages")

    {!!Form::open(["url"=>"auth/login","method"=>"POST","class"=>"form-signin"])!!}
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
    {!!Form::label("email")!!}
    {!!Form::text("email","",["class"=>"form-control","placeholder"=>"enter email"])!!}            

    {!!Form::label("password")!!}
    {!!Form::password("password",["class"=>"form-control","placeholder"=>"enter password"])!!}            
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <div class="registration">
                Don't have an account yet?
                <a class="" href="/auth/register">
                    Create an account
                </a>
            </div>

        </div>
    {!!Form::close()!!}

            {!!Form::open(["url" => "/post-email"])!!}
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        {!!Form::submit("Submit",["class" => "btn btn-success"])!!}
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
            {!!Form::close()!!}

    </div>
@stop



