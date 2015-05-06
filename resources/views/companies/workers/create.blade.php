@extends("layouts.company.master")
@section("customer")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
              <!--state overview start-->
                <span class="lead">Create new worker</span>
                <form class="form-inline" style="float:right;margin-right:15px;margin-top:-10px">
                    <input type="text" name="search" class="form-control" placeholder="fuzzy search"></input>
                </form>
              <div class="row state-overview">
<br>
            <section class="panel col-md-5 col-md-offset-3 profile-forms">
                <p class="lead">Basic profile</p>
                {!!Form::open(["url"=>"/companies/" . $company . "/workers/create","method"=>"POST","class" => "basic-profile"])!!}
                    {!!Form::label("first_name")!!}
                    {!!Form::text("first_name","",["class" => "form-control"])!!}
                    {!!Form::label("last_name")!!}
                    {!!Form::text("last_name","",["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email","",["class" => "form-control"])!!}
                    {!!Form::label("account number")!!}
                    {!!Form::text("account number","",["class" => "form-control"])!!}
<br>
                    {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
                {!!Form::close()!!}
<br>

            </section>
            </section>
    
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; LoginDepot.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
@stop
