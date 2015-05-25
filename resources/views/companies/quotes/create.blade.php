@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
@include("_partials.modals.google-maps")
              <!--state overview start-->
                <span class="lead">Create New Quote</span>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["url" => "/companies/" . $company_name . "/quotes/create-quote","class" => "quote-form"])!!}
                    <div class="form-group">
                        <p class="lead quote-header">Choose Customer</p>
                        {!!Form::label("Customer")!!}
                        {!!Form::text("Customer","",["class" => "form-control typeahead-customer","placeholder" => "Type customer name"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("Pickup City")!!}
                        {!!Form::text("Pickup City","",["class" => "form-control pickup-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("Pickup State")!!}
                        {!!Form::select("Pickup State",$states,"",["class" => "form-control","placeholder" => "Enter State"])!!}
                        {!!Form::label("Pickup ZipCode")!!}
                        {!!Form::text("Pickup ZipCode","",["class" => "form-control","placeholder" => "Enter Zip Code"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("Delivery City")!!}
                        {!!Form::text("Delivery City","",["class" => "form-control delivery-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("Delivery State")!!}
                        {!!Form::select("Delivery State",$states,"",["class" => "form-control typeahead","placeholder" => "Select State"])!!}
                        {!!Form::label("Delivery ZipCode")!!}
                        {!!Form::text("Delivery ZipCode","",["class" => "form-control typeahead","placeholder" => "Enter Zip Code"])!!}
<br>
                    </div>
                    <a href="#" class="btn btn-info show-google-maps">Show in google maps</a>
<br>
                    <p class="lead quote-header">Add Vehicles</p>
                    <div class="form-inline add-vehicles">
<span></span>
                        {!!Form::text("Year","",["class" => "form-control add-vehicle","id" => "year","placeholder" => "Enter year"])!!}
&nbsp;
<span></span>
                        {!!Form::text("Make","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle make"])!!}
&nbsp;
<span></span>
                        {!!Form::text("Model","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle model"])!!}
&nbsp;
<span></span>
                        {!!Form::select("Type",$vehicle_type,"",["class" => "form-control add-vehicle","placeholder" => "Select vehicle type"])!!}
&nbsp;
<span></span>
                        {!!Form::select("Condition",[null => "Select Condition","Running"=> "Running","Not Running" => "Not Running"],"",["class" => "form-control","placeholder" => "Select Vehicle Condition"])!!}
<i class="fa fa-plus-circle"></i>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::select("Carrier Type",[null => "Select Carrier Type","Open Carrier" => "Open Carrier","Enclosed Carrier" => "Enclosed Carrier"],"",["class" => "form-control","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
<a href="#" class="btn btn-info show-google-maps">Compare Prices</a>
<br>
                    <div class="form-group">
                        <p class="lead quote-header">Notes</p>
                        {!!Form::label("Vehicle Notes")!!}
<br>
                        {!!Form::textarea("Vehicle Notes","",["class" => "vehicle-notes-textarea"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("Notes For Customer")!!}
<br>
                        {!!Form::textarea("Notes For Customer","",["class" => "vehicle-notes-textarea"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("Notes For Office")!!}
<br>
                        {!!Form::textarea("Notes For Office","",["class" => "vehicle-notes-textarea"])!!}
                    </div>
<br>
                    <div class="form-inline">
                        <p class="lead quote-header">Price</p>
                        {!!Form::label("Price")!!}
                        {!!Form::text("Price","",["class" => "form-control","placeholder" => "Enter Price"])!!}
                        {!!Form::label("Post Price")!!}
                        {!!Form::text("Post Price","",["class" => "form-control","placeholder" => "Post Price"])!!}
                    </div>
<hr>
                    {!!Form::label("Send Email to Customer")!!}&nbsp;
                    {!!Form::checkbox("Send Email to Customer",true,true)!!}
                    {!!Form::submit("submit",["class" => "btn btn-success pull-right submit-quote"])!!}
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
