@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
@include("_partials.modals.google-maps")
@include("_partials.messages")
              <!--state overview start-->
                <span class="lead">Final Order Overview</span>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["url" => "/companies/" . $company_name . "/quotes/create","class" => "quote-form"])!!}
                    <p>Order id:<span id="customer-id">{!!$final_order["quote_id"]!!}</span></p>
                    {!!Form::hidden("quote_id",$final_order["quote_id"])!!}
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Customer Information</p>
                    {!!Form::label("name")!!}
                    {!!Form::text("name",$final_order["customer_name"],["class" => "form-control"])!!}
                    {!!Form::label("phone")!!}
                    {!!Form::text("phone",$final_order["customer_phone"],["class" => "form-control"])!!}
                    {!!Form::label("secondary phone")!!}
                    {!!Form::text("secondary phone",$customer["secondary_phone"],["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email",$customer["email"],["class" => "form-control"])!!}
                    {!!Form::label("secondary email")!!}
                    {!!Form::text("secondary email",$customer["secondary_email"],["class" => "form-control"])!!}
                    {!!Form::label("pickup date")!!}
                    {!!Form::text("pickup date",$customer["pickup_date"],["class" => "form-control datepicker","placeholder" => "choose a date"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("pickup_city")!!}
<br>
                        {!!Form::text("pickup_city",$quote["pickup_city"],["class" => "form-control pickup-city","placeholder" => "Enter City Name"])!!}
<br>
                        {!!Form::label("pickup_state")!!}
                        {!!Form::select("pickup_state",[$quote["pickup_state"]],"",["class" => "form-control","placeholder" => "Enter State"])!!}
                        {!!Form::label("pickup_zipcode")!!}
                        {!!Form::select("pickup_zipcode",["pickup_zipcode" => $quote["pickup_zipcode"]],"",["class" => "form-control pickup-zipcode","placeholder" => "Enter Zip Code"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("delivery_city")!!}
<br>
                        {!!Form::text("delivery_city",$quote["delivery_city"],["class" => "form-control delivery-city","placeholder" => "Enter City Name"])!!}
<br>
                        {!!Form::label("delivery_state")!!}
                        {!!Form::select("delivery_state",[$quote["delivery_state"]],"",["class" => "form-control","placeholder" => "Select State"])!!}
                        {!!Form::label("delivery_zipcode")!!}
                        {!!Form::select("delivery_zipcode",["delivery_zipcode" => $quote["delivery_zipcode"]],"",["class" => "form-control delivery-zipcode","placeholder" => "Enter Zip Code"])!!}
<br>
                    </div>
                    <a href="#" class="btn btn-info show-google-maps">Show in google maps</a>
<br>
                    <p class="lead quote-header">Add Vehicles</p>
<div class="input-wrap">
                    <div class="form-inline add-vehicles">
<span></span>
                        {!!Form::text("year_1","",["class" => "form-control add-vehicle year","id" => "year","placeholder" => "Enter year"])!!}
<span></span>
                        {!!Form::text("make_1","",["class" => "form-control add-vehicle make","placeholder" => "Enter vehicle make"])!!}
<span></span>
                        {!!Form::text("model_1","",["class" => "form-control add-vehicle model","placeholder" => "Enter vehicle model"])!!}
<span></span>
                        {!!Form::select("type_1",$vehicle_type,"Car",["class" => "form-control vehicle_type","placeholder" => "Select vehicle type"])!!}
<span></span>
                        {!!Form::select("condition_1",["Yes"=> "Running","No" => "Not Running"],"Running",["class" => "form-control condition","placeholder" => "Select Vehicle Condition"])!!}
<span></span>
                        {!!Form::label("quantity")!!}
                        {!!Form::selectRange("quantity_1",1,20,"quantity",["class" => "form-control","placeholder" => "Select Quantity"])!!}
<i class="fa fa-plus-circle"></i>
    </div>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::select("carrier type",["Open" => "Open Carrier","Open" => "Open Carrier","Enclosed" => "Enclosed Carrier"],"Open Carrier",["class" => "form-control select_carrier_type","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
<br>
@if($vehicles["vehicle_two_year"])
                    <div class="form-inline add-vehicles">
<span></span>
                        {!!Form::text("vehicle_two_year",$vehicles["vehicle_two_year"],["class" => "form-control add-vehicle year","id" => "year","placeholder" => "Enter year"])!!}
<span></span>
                        {!!Form::text("vehicle_two_make",$vehicles["vehicle_two_make"],["class" => "form-control add-vehicle make","placeholder" => "Enter vehicle make"])!!}
<span></span>
                        {!!Form::text("vehicle_two_model",$vehicles["vehicle_two_model"],["class" => "form-control add-vehicle model","placeholder" => "Enter vehicle model"])!!}
<span></span>
                        {!!Form::select("vehicle_two_type",[$vehicles["vehicle_two_type"] => $vehicles["vehicle_two_type"]],"Car",["class" => "form-control vehicle_type","placeholder" => "Select vehicle type"])!!}
<span></span>
                        {!!Form::select("vehicle_two_condition",[$vehicles["vehicle_two_condition"]],"Running",["class" => "form-control condition","placeholder" => "Select Vehicle Condition"])!!}
<span></span>
                        {!!Form::label("quantity")!!}
                        {!!Form::selectRange("vehicle_two_quantity",$vehicles["vehicle_two_quantity"],"","quantity",["class" => "form-control","placeholder" => "Select Quantity"])!!}
<i class="fa fa-minus-circle"></i>
    </div>
@endif
<!--<a href="#" class="btn btn-info compare-prices">Compare Prices</a>-->
<br>
                    <div class="form-group">
                        <p class="lead quote-header">Notes</p>
                        {!!Form::label("Vehicle Notes")!!}
<br>
                        {!!Form::textarea("vehicle notes","Some notes about this awesome toyota",["class" => "vehicle-notes-textarea"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("notes for customer")!!}
<a href"#" class="btn btn-success btn-sm timestamp">Timestamp</a>
<br>
<br>
                        {!!Form::textarea("notes for customer","New order has beeen placed",["class" => "vehicle-notes-textarea customer-notes-textarea"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("notes for office")!!}
<br>
                        {!!Form::textarea("notes for office","please review this order",["class" => "vehicle-notes-textarea"])!!}
                    </div>
<br>
                    <div class="form-inline">
                        <p class="lead quote-header">Price</p>
                        {!!Form::label("price")!!}
                        <span class="uship-price">$</span>{!!Form::text("price","",["class" => "form-control price","placeholder" => "Enter Price"])!!}
                        &nbsp;
                        <a class="btn btn-success uship">Calculate</a>
                        &nbsp;
                        {!!Form::label("post price")!!}
                        {!!Form::text("post price","",["class" => "form-control","placeholder" => "enter post price"])!!}
                    </div>
<hr>
<div class="form-group form-inline">
                    {!!Form::label("send email to customer")!!}&nbsp;
                    {!!Form::checkbox("send email to customer",true,true)!!}
&nbsp;
                    {!!Form::select("add resource",[null => "Add Resource","google"=> "google","bing" => "bing"],"",["class" => "form-control"])!!}
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
