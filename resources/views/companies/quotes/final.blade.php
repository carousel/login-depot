@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
@include("_partials.modals.google-maps")
@include("_partials.modals.final-order")
@include("_partials.messages")
              <!--state overview start-->
                <span class="lead">Final Quote Overview</span>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12 ">
<br>
                {!!Form::open(["url" => '',"class" => "quote-form"])!!}
                    <p>Order id:<span id="customer-id">{!!$quote->quote_id!!}</span></p>
                    {!!Form::hidden("quote_id",$quote->quote_id)!!}
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Customer Information</p>
                    {!!Form::label("name")!!}
                    {!!Form::text("name",$customer->name,["class" => "form-control"])!!}
                    {!!Form::label("phone")!!}
                    {!!Form::text("phone",$customer->phone,["class" => "form-control"])!!}
                    {!!Form::label("secondary phone")!!}
                    {!!Form::text("secondary phone",$customer->secondary_phone,["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email",$customer->email,["class" => "form-control"])!!}
                    {!!Form::label("secondary email")!!}
                    {!!Form::text("secondary email",$customer->secondary_email,["class" => "form-control"])!!}
                    {!!Form::label("pickup date")!!}
                    {!!Form::text("pickup date",$customer->pickup_date,["class" => "form-control datepicker","placeholder" => "choose a date"])!!}
                    </div>
                    <div class="form-group col-md-6">
<span class="btn btn-primary pull-right pickup-refresh">Refresh</span>

                        <p class="lead quote-header">Pickup Address</p>                        
                        
                        {!!Form::label("pickup_city")!!}
<br>
                        {!!Form::text("pickup_city",$quote->pickup_city,["class" => "form-control pickup-city","placeholder" => "Enter City Name","autocomplete" => "off"])!!}
<br>
                        {!!Form::label("pickup_state")!!}
                        {!!Form::select("pickup_state",$states,$quote->pickup_state,["class" => "form-control pickup-state","placeholder" => "Enter State"])!!}
                        {!!Form::label("pickup_zipcode")!!}
<br>
                        {!!Form::text("pickup_zipcode",$quote->pickup_zipcode,["class" => "form-control pickup-zipcode","placeholder" => "Enter Zip Code","autocomplete" => "off"])!!}
<br>
                    </div>
                    <div class="form-group col-md-6">
<span class="btn btn-primary pull-right delivery-refresh">Refresh</span>
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("delivery_city")!!}
<br>
                        {!!Form::text("delivery_city",$quote->delivery_city,["class" => "form-control delivery-city","placeholder" => "Enter City Name","autocomplete" => "off"])!!}
<br>
                        {!!Form::label("delivery_state")!!}
                        {!!Form::select("delivery_state",$states,$quote->delivery_state,["class" => "form-control delivery-state","placeholder" => "Select State"])!!}
                        {!!Form::label("delivery_zipcode")!!}
                        {!!Form::text("delivery_zipcode",$quote->delivery_zipcode,["class" => "form-control delivery-zipcode","placeholder" => "Enter Zip Code","autocomplete" => "off"])!!}
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
                        {!!Form::text("make_1","",["class" => "form-control add-vehicle make","placeholder" => "Enter vehicle make","autocomplete" => "off"])!!}
<span></span>
                        {!!Form::text("model_1","",["class" => "form-control add-vehicle model","placeholder" => "Enter vehicle model","autocomplete" => "off"])!!}
<span></span>
                        {!!Form::select("type_1",$vehicle_type,"Car",["class" => "form-control vehicle_type","placeholder" => "Select vehicle type"])!!}
<span></span>
                        {!!Form::select("condition_1",["Running"=> "Running","Not Running" => "Not Running"],"Running",["class" => "form-control condition","placeholder" => "Select Vehicle Condition"])!!}
<span></span>
                        {!!Form::label("quantity")!!}
                        {!!Form::selectRange("quantity_1",1,20,"quantity",["class" => "form-control","placeholder" => "Select Quantity"])!!}
<i class="fa fa-plus-circle"></i>
    </div>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::select("carrier type",[$quote->carrier_type,"Open" => "Open Carrier","Enclosed" => "Enclosed Carrier"],"Open Carrier",["class" => "form-control select_carrier_type","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
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
                        {!!Form::label("post price")!!}
                        {!!Form::text("post price","",["class" => "form-control price","placeholder" => "Post Price"])!!}
                        &nbsp;
                        <a class="btn btn-success uship">Calculate</a>
                        &nbsp;
                        {!!Form::label("price")!!}
                        {!!Form::text("price","",["class" => "form-control","placeholder" => "Price"])!!}
                    </div>
<hr>
<div class="form-group form-inline">
                    {!!Form::label("send email to customer")!!}&nbsp;
                    {!!Form::checkbox("send email to customer",true,true)!!}
&nbsp;
                    {!!Form::select("add resource",[null => "Add Resource","google"=> "google","bing" => "bing"],"",["class" => "form-control"])!!}
</div>
                    <a href='#' class='btn btn-primary pull-right final-order-modal'>Additional Order Info</a>
                    {!!Form::submit("Submit to central dispatch",["class" => "btn btn-success pull-right submit-quote"])!!}
&nbsp;
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
