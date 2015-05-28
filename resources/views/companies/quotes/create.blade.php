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
                {!!Form::open(["url" => "/companies/" . $company_name . "/quotes/create","class" => "quote-form"])!!}
                    <p>Order id:<span id="customer-id">{!!$quote_id!!}</span></p>
                    {!!Form::hidden("quote_id",$quote_id)!!}
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Customer Information</p>
                    {!!Form::label("name")!!}
                    {!!Form::text("name","John",["class" => "form-control"])!!}
                    {!!Form::label("phone")!!}
                    {!!Form::text("phone","0038765222480",["class" => "form-control"])!!}
                    {!!Form::label("secondary phone")!!}
                    {!!Form::text("secondary phone","0038751427476",["class" => "form-control"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email","john.doe@example.com",["class" => "form-control"])!!}
                    {!!Form::label("secondary email")!!}
                    {!!Form::text("secondary email","charlie.parker@bebop.com",["class" => "form-control"])!!}
                    {!!Form::label("pickup date")!!}
                    {!!Form::text("pickup date","2015-05-30",["class" => "form-control datepicker","placeholder" => "choose a date"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Pickup Address</p>
                        {!!Form::label("pickup city")!!}
                        {!!Form::text("pickup city","Miami",["class" => "form-control pickup-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("pickup state")!!}
                        {!!Form::select("pickup state",$states,"",["class" => "form-control","placeholder" => "Enter State"])!!}
                        {!!Form::label("pickup zipcode")!!}
                        {!!Form::text("pickup zipcode","90004",["class" => "form-control pickup_zipcode","placeholder" => "Enter Zip Code"])!!}
                    </div>
                    <div class="form-group col-md-6">
                        <p class="lead quote-header">Delivery Address</p>
                        {!!Form::label("delivery city")!!}
                        {!!Form::text("delivery city","Dallas",["class" => "form-control delivery-city","placeholder" => "Enter City Name"])!!}
                        {!!Form::label("delivery state")!!}
                        {!!Form::select("delivery state",$states,"",["class" => "form-control typeahead","placeholder" => "Select State"])!!}
                        {!!Form::label("delivery zipcode")!!}
                        {!!Form::text("delivery zipcode","00610",["class" => "form-control typeahead delivery_zipcode","placeholder" => "Enter Zip Code"])!!}
<br>
                    </div>
                    <a href="#" class="btn btn-info show-google-maps">Show in google maps</a>
<br>
                    <p class="lead quote-header">Add Vehicles</p>
                    <div class="form-inline add-vehicles">
<span></span>
                        {!!Form::text("year_1","2013",["class" => "form-control add-vehicle","id" => "year","placeholder" => "Enter year"])!!}
<span></span>
                        {!!Form::text("make_1","Toyota",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle make"])!!}
<span></span>
                        {!!Form::text("model_1","Avensis",["class" => "form-control add-vehicle","placeholder" => "Enter vehicle model"])!!}
<span></span>
                        {!!Form::select("type_1",$vehicle_type,"Car",["class" => "form-control select_vehicle_type","placeholder" => "Select vehicle type"])!!}
<span></span>
                        {!!Form::select("condition_1",[null => "Select Condition","Yes"=> "Running","No" => "Not Running"],"Running",["class" => "form-control select_condition","placeholder" => "Select Vehicle Condition"])!!}
<span></span>
                        {!!Form::label("quantity")!!}
                        {!!Form::selectRange("quantity_1",1,20,"quantity",["class" => "form-control","placeholder" => "Select Vehicle Condition"])!!}
<i class="fa fa-plus-circle"></i>
</div>
&nbsp;
<div class="form-inline">
                        {!!Form::select("carrier type",[null => "Select Carrier Type","Open" => "Open Carrier","Enclosed" => "Enclosed Carrier"],"Open Carrier",["class" => "form-control select_carrier_type","placeholder" => "Select Carrier Type"])!!}
&nbsp;
                    </div>
<a href="#" class="btn btn-info compare-prices">Compare Prices</a>
<br>
                    <div class="form-group">
                        <p class="lead quote-header">Notes</p>
                        {!!Form::label("Vehicle Notes")!!}
<br>
                        {!!Form::textarea("vehicle notes","Some notes about this awesome toyota",["class" => "vehicle-notes-textarea"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("notes for customer")!!}
<br>
                        {!!Form::textarea("notes for customer","New order has beeen placed",["class" => "vehicle-notes-textarea"])!!}
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
                        {!!Form::text("price","",["class" => "form-control price","placeholder" => "Enter Price"])!!}
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
