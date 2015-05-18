@extends("layouts.company.master")
@section("calendar")
<style>
    #calendar{
        margin-right:2%;
    }
    .fc-toolbar{
        margin-bottom:6%;
    }
	#external-events {
		float: left;
		width: 250px;
		padding: 0 10px;
		border: 1px solid #ccc;
		background: #eee;
		text-align: left;
	}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
	}
		
	#external-events .fc-event {
		margin: 10px 0;
		cursor: pointer;
	}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
	}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
	}

</style>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @include("_partials.modals.calendar-modal")
<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->
              <!-- page start-->

		    <div id='external-events'>
                <h4>Draggable Events</h4>
                <!--<div class='fc-event btn' data-toggle="modal" data-target="#exampleModal">My Event</div>-->
                <div class='fc-event btn'>My Event</div>
                <!--<p>
                    <input type='checkbox' id='drop-remove' />
                    <label for='drop-remove'>remove after drop</label>
                </p>-->
              </div>
            <div class="col-md-5">
                    <p class="lead">Choose worker for event share</p>
                    {!!Form::select("",$workers,[],["class" => "form-control subscriber"])!!}
                        <br>
                    {!!Form::submit("Refresh",["class" => "btn btn-primary pull-right"])!!}
            </div>
              <!-- page end-->
          </section>
		                <div id='calendar'></div>
      </section>
      <!--main content end-->



@stop
