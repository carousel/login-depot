@extends("layouts.company.master")
@section("customer")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.messages")
@include("_partials.errors")
              <!--state overview start-->
                <span class="lead">Create new customer</span>
                <form class="form-inline" style="float:right;margin-right:15px;margin-top:-10px">
                    <input type="text" name="search" class="form-control" placeholder="fuzzy search"></input>
                </form>
              <div class="row state-overview">
<br>
            <section class="panel col-md-5 col-md-offset-3 profile-forms">
                <p class="lead">Basic profile</p>
                {!!Form::open(["url"=>"/companies/" . $company . "/customers/". $customer_object->first_name ."/update","method"=>"post","class" => "basic-profile"])!!}
                    {!!Form::label("first name")!!}
                    {!!Form::text("first name",$customer_object->first_name,["class" => "form-control"])!!}
                    {!!Form::label("last name")!!}
                    {!!Form::text("last name",$customer_object->last_name,["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email",$customer_object->email,["class" => "form-control"])!!}
<br>
                    {!!Form::submit("Update",["class" => "btn btn-success pull-right"])!!}
                {!!Form::close()!!}

                {!!Form::open(["url"=>"/companies/" . $company . "/customers/". $customer_object->first_name ."/delete","method"=>"post","class" => "basic-profile"])!!}
                    {!!Form::submit("Delete",["class" => "btn btn-danger delete-button"])!!}
                {!!Form::close()!!}
                
<br>
                <p class="lead">Billing profile</p>
                {!!Form::open(["url"=>"/","method"=>"post","class" => "billing-profile"])!!}
                    {!!Form::label("first name")!!}
                    {!!Form::text("first name","",["class" => "form-control"])!!}
                    {!!Form::label("last name")!!}
                    {!!Form::text("last name","",["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email","",["class" => "form-control"])!!}
<br>
                    {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
                {!!Form::close()!!}

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
