@extends("layouts.master-auth")
@section("profile-warning")
@include("_partials.errors")
          <section class="wrapper">
        </section>
    </section>
        <section class="panel col-md-10 col-md-offset-1">
<br>
<div>
            <img src="http://nationwideautotransportation.com/wp-content/uploads/2014/07/logomobile.png" style="border: 1px solid #e9e9e9;width: 200px;float: left;" alt="logo">
                        <img width="200" style="float:right" src="/img/mobilecall.png">
<br>
<div class="order-form-nav">
    <a href="#" style="color:white;margin-right:20px">Home</a>
    <a href="#" style="color:white;margin-right:20px">About Us</a>
    <a href="#" style="color:white;margin-right:20px">Contact</a>
</div>
<div class="service-signup" style="margin-left:20%;margin-bottom:20px">
    <p class="lead">Service Signup</p>
    <img src="/img/cars.jpg"/>
    <p>
            Nationwide Auto Transportation Terms &amp;Conditions
            1930 S Federal Blvd #B3 DENVER CO<br>80219
            phone:800-616-6516
    </p>
</div>
            </div>
            {!!Form::open(["url"=>"/companies/$company/order-form/" . $quote_id,"method"=>"POST","class" => "order-form form-inline"])!!}
        <div class="form-group order-input">
        <p class="lead">Main Contact Information</p>
                {!!Form::label("customer name*")!!}
                {!!Form::text("customer_name",$customer["name"],["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("customer phone*")!!}
                {!!Form::text("customer_phone",$customer["phone"],["class" => "form-control"])!!}
        </div>
        <div class="form-group order-input">
                {!!Form::label("customer email*")!!}
                {!!Form::text("customer_email",$customer["email"],["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("quote_id*")!!}
                {!!Form::text("quote_id",$quote["quote_id"],["class" => "form-control"])!!}
        </div>
        <div class="form-group order-input">
<br>
        <p class="lead">Pickup Transportation Information</p>
                {!!Form::label("pickup contact name*")!!}
                {!!Form::text("pickup_contact_name","",["class" => "form-control","placeholder" => "enter pickup contact name"])!!}
&nbsp;
                {!!Form::label("pickup contact phone*")!!}
                {!!Form::text("pickup_contact_phone","",["class" => "form-control","placeholder" => "enter pickup contact phone"])!!}
        </div>
        <div class="form-group order-input">
                {!!Form::label("pickup contact secondary phone")!!}
                {!!Form::text("pickup_contact_secondary_phone","",["class" => "form-control","placeholder" => "enter pickup contact secondary phone"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("pickup address")!!}
                {!!Form::text("pickup_address","",["class" => "form-control","placeholder" => "enter pickup address"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("pickup city*")!!}
                {!!Form::text("pickup_city","",["class" => "form-control","placeholder" => "enter pickup city"])!!}
&nbsp;
                {!!Form::label("pickup state*")!!}
                {!!Form::select("pickup_state",$states,"",["class" => "form-control"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("pickup zipcode*")!!}
                {!!Form::text("pickup_zipcode","",["class" => "form-control"])!!}
&nbsp;
                <span class="lead">Pickup Address Type</span>
&nbsp;
                {!!Form::label("residential")!!}
                {!!Form::radio("pickup_address_type","Residential",true)!!}
                {!!Form::label("commercial")!!}
                {!!Form::radio("pickup_address_type","Commercial")!!}
&nbsp;
        </div>
        <div class="form-group order-input">
<br>
        <p class="lead">Dropoff Transportation Information</p>
                {!!Form::label("dropoff contact name*")!!}
                {!!Form::text("dropoff_contact_name","",["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("dropoff contact phone*")!!}
                {!!Form::text("dropoff_contact_phone","",["class" => "form-control"])!!}
        </div>
        <div class="form-group order-input">
                {!!Form::label("dropoff contact secondary phone")!!}
                {!!Form::text("dropoff_contact_secondary_phone","",["class" => "form-control"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("dropoff address")!!}
                {!!Form::text("dropoff_address","",["class" => "form-control"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("dropoff city*")!!}
                {!!Form::text("dropoff_city","",["class" => "form-control"])!!}
&nbsp;
                {!!Form::label("dropoff state*")!!}
                {!!Form::select("dropoff_state",$states,"",["class" => "form-control"])!!}
&nbsp;
        </div>
        <div class="form-group order-input">
                {!!Form::label("dropoff zipcode*")!!}
                {!!Form::text("dropoff_zipcode","",["class" => "form-control"])!!}
&nbsp;
                <span class="lead">Dropoff Address Type</span>
&nbsp;
                {!!Form::label("residential")!!}
                {!!Form::radio("dropoff_address_type","Residential",true)!!}
                {!!Form::label("commercial")!!}
                {!!Form::radio("dropoff_address_type","Commercial")!!}
&nbsp;
        </div>
        <hr>
<p class="lead">Terms and Conditions:</p>
        <div class="terms-conditions">
                Terms and Conditions<p></p>
                <p>1.   <strong><em> Nationwide Auto Transportation </em></strong>is licensed and bonded by the FMCSA and does agree to arrange to have vehicle(s) described in quotation shipped on or about the dates available depending on the carrier/transports schedule.<strong><em> Nationwide Auto </em></strong><strong><em>Transportation </em></strong>will designate a reliable carrier/transporter to fill the terms and conditions of the agreement.<strong><em> Nationwide Auto </em></strong><strong><em>Transportation </em></strong>is a broker and does not guarantee specific pickup or delivery dates. Pickup and delivery dates are only estimates and there are no guarantees.  <strong><em>Nationwide Auto </em></strong><strong><em>Transportation </em></strong>will not be held responsible for delays for any reason.  After<strong><em> Nationwide Auto </em></strong><strong><em>Transportation </em></strong>has confirmed scheduling with a reliable carrier/transporter.</p>
                <p>2.     This order is subject to all terms and conditions of the carrier/transporters straight bill of lading. Copies of which are available at the office of the carrier/transporter. Once a carrier/transporter has been assigned to your order, the bill of lading will then be the only agreement in effect along with the terms and conditions of the carrier/transporter assigned to your order.</p>
                <p>3.     The carrier/transporter will not be responsible for any damages not resulting from carrier/transporter negligence. The customer verifies the vehicle is free of contents, to and including trunk, therefore <strong><em>Nationwide Auto </em></strong><strong><em>Transportation </em></strong>and assigned carrier/transporter do not take any responsibility for personal items left inside vehicle.</p>
                <p>4.     The carrier/transporter will not be responsible for any damages caused by freezing of engine, cooling system, batteries, or due to leaking fluids, etc. The carrier/transporter will not be responsible for any exhaust system, mufflers, tail pipes, or any mechanical function damage to include engine, transmission, rear end, drive trains, wiring systems, air bags, clutches, computerized components (anything that is mechanical or electrical). The carrier/transporter will not be responsible for any convertible tops that are loose, torn, or have visible wear. This includes any canvas or material coverings.</p>
                <p>5.     The customer is responsible for preparing the vehicle for transport, Including: disarming any alarms, removing any loose parts, accessories, hanging spoilers, etc. Any part of the vehicle that falls off during transport is the customer’s responsibility including damages caused to any and all other vehicles involved.</p>
                <p>6.     No auto rental will be honored for delays, damage, accidents, acts of God, or for any other reason.</p>
                <p>7.     If a carrier/transporter is sent to acquire the vehicle and it is not there, is unavailable, has been moved or cannot be picked up for any other reason, the customer authorizes <strong><em>Nationwide Auto </em></strong><strong><em>Transportation </em></strong>to charge an additional $100 re posting fee that will be added to your transport order for the re posting of your order to our dispatching department for rescheduling, depending on the first available date given at the time the service order was placed.</p>
                <p>8.     The vehicle owner or customer must in their absence, designate a person to act as their agent at the point of pickup or deliver. In which will be noted on the order form. Customer/Shipper can be notified for pickup a minimum of 3-24 hours.</p>
                <p>9.     All vehicles to be delivered with a balance owing shall be paid by CASH or CASHIER’S CHECK ONLY (U.S. Dollars) payable to the carrier/transporter. Should delivery be attempted after proper notification (3-24 hours voice notification to phone numbers provided by customer/shipper) and customer/shipper or his designated agent does not have proper funds or is unavailable to receive delivery, vehicle(s) will be taken to and left at the nearest terminal, where shipper is responsible and will have to retrieve, pay for storage or redelivery fees. It is the customer’s responsibility to have payment in full when carrier/transporter arrives. If carrier/transporter notices that he is unable to drive to the address at the time of delivery the customer agrees to meet the carrier/transporter at a nearby location. The customer agrees that if the payment cannot be made by cash or cashier’s check, the vehicle will be stored at the customer’s expense. Should the customer be unable to accept delivery for any reason, the vehicle will be stored at the customer’s expense.</p>
                <p>10.     The customer agrees that should this vehicle become inoperative for any reason at pickup or during transport, a $150 non-operable fee will be assessed to the customer at the time of delivery.</p>
                <p>11.     The carrier/transporter has primary insurance responsibility during transit of your vehicle. All claims will be settled at actual cost. All claims are to be made to the actual carrier/transporter who transported your vehicle(s). Refer to the carrier/transporters bill of lading for information regarding the claim process. The customer agrees that this is the only contract between the parties covering the arrangement of transport and no other agreements or contracts are in effect until arrangement of scheduling has been made with an authorized carrier, at this time the carrier/transporters contract and bill of lading will be in effect immediately. No claims or legal action of any kind may be initiated against the transport broker. All claims for damage must be made to the carrier/transporter.</p>
                <p>12.     Exceptions for damages must be noted on the post transport inspection form at the time of delivery, any claim for damages not documented on the post-trip inspection form will not be honored.</p>
                <p>13.     All claims, litigation or legal action must have a right of venue in that state of Colorado, County of Denver in the Superior Court.</p>
                <p>14.     You may cancel your order at anytime prior to the deposit payment; cancellations must be made in writing by fax or email.  If you cancel your transport prior to your vehicle(S) are assigned to carrier. If booked order is cancelled after assigned to a carrier there is a no refund for the deposit that has been pay . However, if in fact your vehicle is not scheduled for pickup within 5 days from your first available date, you are entitled to a full refund of your deposit.</p>
                <p>15.     We reserve the right to refuse service to anyone who violates any of the terms and conditions written above. Or for any other reason we feel necessary. Threats, harassment, etc. will result in immediate cancellation of your service order and the administrative fee will not be refunded as we have actively worked on your order, the remainder of your deposit will be refunded.</p>


                <h3 class="gform_title">ACCEPT TERMS AND CONDITIONS</h3>
                <span class="gform_description">After reading the Terms and Conditions above, please enter your name, email address, phone number, quote ID#, pick up address, destination address and mark that you have read and accept the Terms and Conditions.</span>
<p></p>
        </div>
{!!Form::checkbox("terms-conditions","term-conditions")!!}&nbsp;<span>I have read and accepts terms and conditions</span>
        
                {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
            {!!Form::close()!!}
<br>

        </section>
@stop
