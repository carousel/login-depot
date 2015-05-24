@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
              <!--state overview start-->
                <span class="lead">Create New Quote</span>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["class" => "quote-form"])!!}
                    <div class="form-group">
                        <p class="lead quote-header">Choose Customer</p>
                        {!!Form::label("Customer")!!}
                        {!!Form::text("Customer","",["class" => "form-control typeahead-customer","placeholder" => "Type customer name"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("Pickup City")!!}
                        {!!Form::text("Pickup City","",["class" => "form-control","placeholder" => "Enter City Name"])!!}
&nbsp;
                        {!!Form::label("Pickup State")!!}
                        {!!Form::select("Pickup State",$states,"",["class" => "form-control","placeholder" => "Enter State"])!!}
&nbsp;
                        {!!Form::label("Pickup ZipCode")!!}
                        {!!Form::text("Pickup ZipCode","",["class" => "form-control","placeholder" => "Enter Zip Code"])!!}
&nbsp;
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("Delivery City")!!}
                        {!!Form::text("Delivery City","",["class" => "form-control typeahead","placeholder" => "Enter City Name"])!!}
&nbsp;
                        {!!Form::label("Delivery State")!!}
                        {!!Form::select("Delivery State",$states,"",["class" => "form-control typeahead","placeholder" => "Select State"])!!}
&nbsp;
                        {!!Form::label("Delivery ZipCode")!!}
                        {!!Form::text("Delivery ZipCode","",["class" => "form-control typeahead","placeholder" => "Enter Zip Code"])!!}
&nbsp;
                    </div>
<a href="#" class="btn btn-primary show-google-maps">Show in google maps</a>
<br>
<br>
                    <p class="lead quote-header">Add Vehicles</p>
                    <div class="form-inline add-vehicles">
                        {!!Form::label("year")!!}
                        {!!Form::text("year","",["class" => "form-control add-vehicle","id" => "year","placeholder" => "Enter year"])!!}
&nbsp;
                        {!!Form::label("make")!!}
                        {!!Form::text("make","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle make"])!!}
&nbsp;
                        {!!Form::label("model")!!}
                        {!!Form::text("model","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle model"])!!}
&nbsp;
<br>
                        {!!Form::label("Type")!!}
                        {!!Form::select("Type",$vehicle_type,"",["class" => "form-control add-vehicle","placeholder" => "Select vehicle type"])!!}
&nbsp;
                        {!!Form::label("Condition")!!}
                        {!!Form::select("Condition",["Running"=> "Running","Not Running" => "Not Running"],"",["class" => "form-control","placeholder" => "Select Vehicle Condition"])!!}
&nbsp;
<i class="fa fa-plus-circle"></i>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::label("Carrier Type")!!}
                        {!!Form::select("Carrier Type",["Open Carrier" => "Open Carrier","Enclosed Carrier" => "Enclosed Carrier"],"",["class" => "form-control","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
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
