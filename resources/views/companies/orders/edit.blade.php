@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
@include("_partials.modals.google-maps")
@include("_partials.messages")
              <!--state overview start-->
                <span class="lead">Create New Quote</span>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["url" => "/companies/" . $company_name . "/orders/create","class" => "quote-form"])!!}
                    <p>Order id:<span id="customer-id">{!!$order_id!!}</span></p>
                    {!!Form::hidden("Order_Id",$order_id)!!}
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Customer Information</p>
                    {!!Form::label("Name")!!}
                    {!!Form::text("Name",$customer_object->name,["class" => "form-control"])!!}
                    {!!Form::label("Phone")!!}
                    {!!Form::text("Phone",$customer_object->phone,["class" => "form-control"])!!}
                    {!!Form::label("Secondary Phone")!!}
                    {!!Form::text("Secondary Phone",$customer_object->secondary_phone,["class" => "form-control"])!!}
                    {!!Form::label("Email")!!}
                    {!!Form::text("Email",$customer_object->email,["class" => "form-control"])!!}
                    {!!Form::label("Secondary Email")!!}
                    {!!Form::text("Secondary Email",$customer_object->secondary_email,["class" => "form-control"])!!}
                    {!!Form::label("Pickup Date")!!}
                    {!!Form::text("Pickup Date",$customer_object->pickup_date,["class" => "form-control datepicker","placeholder" => "choose a date"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("Pickup City")!!}
                        {!!Form::text("Pickup City",$order_object->pickup_city,["class" => "form-control pickup-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("Pickup State")!!}
                        {!!Form::select("Pickup State",$states,$order_object->pickup_state,["class" => "form-control","placeholder" => "Enter State"])!!}
                        {!!Form::label("Pickup ZipCode")!!}
                        {!!Form::text("Pickup ZipCode",$order_object->pickup_zipcode,["class" => "form-control","placeholder" => "Enter Zip Code"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("Delivery City")!!}
                        {!!Form::text("Delivery City",$order_object->delivery_city,["class" => "form-control delivery-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("Delivery State")!!}
                        {!!Form::select("Delivery State",$states,$order_object->delivery_state,["class" => "form-control typeahead","placeholder" => "Select State"])!!}
                        {!!Form::label("Delivery ZipCode")!!}
                        {!!Form::text("Delivery ZipCode",$order_object->delivery_zipcode,["class" => "form-control typeahead","placeholder" => "Enter Zip Code"])!!}
<br>
                    </div>
                    <a href="#" class="btn btn-info show-google-maps">Show in google maps</a>
<br>
                    <p class="lead quote-header">Add Vehicles</p>
                    <div class="form-inline add-vehicles">
<span></span>
                        {!!Form::text("Year_1","",["class" => "form-control add-vehicle","id" => "year","placeholder" => "Enter year"])!!}
<span></span>
                        {!!Form::text("Make_1","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle make"])!!}
<span></span>
                        {!!Form::text("Model_1","",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle model"])!!}
<span></span>
                        {!!Form::select("Type_1",$vehicle_type,"",["class" => "form-control add-vehicle","placeholder" => "Select vehicle type"])!!}
<span></span>
                        {!!Form::select("Condition_1",[null => "Select Condition","Running"=> "Running","Not Running" => "Not Running"],"",["class" => "form-control","placeholder" => "Select Vehicle Condition"])!!}
<span></span>
                        {!!Form::label("Quantity")!!}
                        {!!Form::selectRange("Quantity_1",1,20,"quantity",["class" => "form-control","placeholder" => "Select Vehicle Condition"])!!}
<i class="fa fa-plus-circle"></i>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::select("Carrier Type",[null => "Select Carrier Type","Open Carrier" => "Open Carrier","Enclosed Carrier" => "Enclosed Carrier"],"",["class" => "form-control","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
<a href="#" class="btn btn-info compare-prices">Compare Prices</a>
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
<div class="form-group form-inline">
                    {!!Form::label("Send Email to Customer")!!}&nbsp;
                    {!!Form::checkbox("Send Email to Customer",true,true)!!}
&nbsp;
                    {!!Form::select("Add Resource",[null => "Add Resource","google"=> "google","bing" => "bing"],"",["class" => "form-control"])!!}
</div>
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
