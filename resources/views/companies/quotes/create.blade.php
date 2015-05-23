@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
              <!--state overview start-->
                <span class="lead">Create New Quote</span>
                <form class="form-inline" style="float:right;margin-right:15px;margin-top:-10px">
                    <input type="text" name="search" class="form-control" placeholder="fuzzy search"></input>
                </form>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["url"=>"/companies/" . $company_name . "/quotes/create","method"=>"POST"])!!}
                    <div class="form-group">
                        <p class="lead quote-header">Choose Customer</p>
                        {!!Form::label("Customer")!!}
                        {!!Form::text("Customer","",["class" => "form-control typeahead-customer","placeholder" => "Type customer name"])!!}
                    </div>
                    <div class="form-group col-md-4">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("Pickup City")!!}
                        {!!Form::text("Pickup City","",["class" => "form-control","placeholder" => "Enter city name"])!!}
&nbsp;
                        {!!Form::label("Pickup State")!!}
                        {!!Form::select("Pickup State",["Select Pickup State"],"",["class" => "form-control","placeholder" => "Enter State"])!!}
&nbsp;
                        {!!Form::label("Pickup ZipCode")!!}
                        {!!Form::text("Pickup ZipCode","",["class" => "form-control","placeholder" => "Enter Zip Code"])!!}
&nbsp;
                    </div>
                    <div class="form-group col-md-4">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("Delivery City")!!}
                        {!!Form::text("Delivery City","",["class" => "form-control typeahead","placeholder" => "Type city name"])!!}
&nbsp;
                        {!!Form::label("Delivery State")!!}
                        {!!Form::select("Delivery State",["Select Delivery State"],"",["class" => "form-control typeahead","placeholder" => "Select State"])!!}
&nbsp;
                        {!!Form::label("Delivery ZipCode")!!}
                        {!!Form::text("Delivery ZipCode","",["class" => "form-control typeahead","placeholder" => "Type zip code"])!!}
&nbsp;
                    </div>
                    <div class="form-group col-md-4">
                        <p class="lead quote-header">Vehicle Information</p>
                        {!!Form::label("Year")!!}
                        {!!Form::text("Year","",["class" => "form-control typeahead","placeholder" => "Type year"])!!}
&nbsp;
                        {!!Form::label("Make")!!}
                        {!!Form::text("Make","",["class" => "form-control typeahead","placeholder" => "Type vehicle make"])!!}
&nbsp;
                        {!!Form::label("Model")!!}
                        {!!Form::text("Model","",["class" => "form-control typeahead","placeholder" => "Type vehicle model"])!!}
&nbsp;
                        {!!Form::label("Vehicle Type")!!}
                        {!!Form::select("Vehicle Type",["Select Vehicle Type"],"",["class" => "form-control typeahead","placeholder" => "Select Vehicle Type"])!!}
&nbsp;
                        {!!Form::label("Carrier Type")!!}
                        {!!Form::select("Carrier Type",["Select Carrier Type"],"",["class" => "form-control typeahead","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
<br>
<a href="#" class="lead">Show in google maps</a>
<br>
<br>
                    <div class="form-group">
                        {!!Form::label("Vehicle Notes")!!}
<br>
                        {!!Form::textarea("Vehicle Notes","",["class" => "vehicle-notes-textarea"])!!}
                    </div>
<br>
                    {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
                {!!Form::close()!!}
<br>

            </section>
            </section>
        



      <!--footer start-->
      <!--<footer class="site-footer">
          <div class="text-center">
              2015 &copy; LoginDepot.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>-->
      <!--footer end-->
  </section>
@stop
