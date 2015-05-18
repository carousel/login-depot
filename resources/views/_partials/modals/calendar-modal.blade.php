

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit event</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Description:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
                <label for="message-text" class="control-label">Clic to pick a color for event:</label>
                <input type="text" id="colorpicker" class="colorpicker form-control" value="#cdccff">
          </div>
          <div class="form-group form-inline">
            <label for="message-text" class="control-label">Start:</label>
                {!!Form::selectRange("year",2015,2020,[],["class" => "form-control"])!!}
                {!!Form::selectMonth("January",[],["class" => "form-control"])!!}
                {!!Form::selectRange("day",1,31,[],["class" => "form-control"])!!}
          </div>
          <div class="form-group form-inline">
            <label for="message-text" class="control-label">End:</label>
                {!!Form::selectRange("year",2015,2020,[],["class" => "form-control"])!!}
                {!!Form::selectMonth("January",[],["class" => "form-control"])!!}
                {!!Form::selectRange("day",1,31,[],["class" => "form-control"])!!}
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Share event</button>
      </div>
    </div>
  </div>
</div>
