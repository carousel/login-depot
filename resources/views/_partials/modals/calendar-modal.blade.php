

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit event</h4>
      </div>
      <div class="modal-body">
{!!Form::open(["url" => "/companies/" . $company_name . "/share-calendar","method" => "POST", "class" => "share-event-form"])!!}
          <div class="form-group">
            <label for="title" class="control-label">Title:</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label for="description" class="control-label">Description:</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
                <label for="color" class="control-label">Click to pick a color for event:</label>
                <input type="text" name="color" class="colorpicker form-control" value="#cdccff">
          </div>
          <div class="form-group form-inline">
            <label for="start_date" class="control-label">Start:</label>
                {!!Form::selectRange("start_year",2015,2020,[],["class" => "form-control"])!!}
                {!!Form::selectMonth("start_month",[],["class" => "form-control"])!!}
                {!!Form::selectRange("start_day",1,31,[],["class" => "form-control"])!!}
          </div>
          <div class="form-group form-inline">
            <label for="end_date" class="control-label">End:</label>
                {!!Form::selectRange("end_year",2015,2020,[],["class" => "form-control"])!!}
                {!!Form::selectMonth("end_month",[],["class" => "form-control"])!!}
                {!!Form::selectRange("end_day",1,31,[],["class" => "form-control"])!!}
                <input type="hidden" name="worker">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!!Form::submit("Share event",["class" => "btn btn-success share-event-button"])!!}
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
<script src="//code.jquery.com/jquery.js"></script>
