

  <hr>
  <h5 id="time-header">Elapsed Time</h5>
  <p id="clock-info">24-hour Clock</p>

  <form class="form-horizontal">
    <!-- START TIME -->
    <div class="form-group time">
      <label class="col-sm-2 control-label">Start Time</label>
      <input type="text" class="form-control" name="st-hours" value="12" maxlength="2">:
      <input type="text" class="form-control" name="st-minutes" value="00" maxlength="2">:
      <input type="text" class="form-control" name="st-seconds" value="00" maxlength="2">
      <span class="units offset">hh:mm:ss</span>
    </div>

    <!-- END TIME -->
    <div class="form-group time">
      <label class="col-sm-2 control-label">End Time</label>
      <input type="text" class="form-control" name="fn-hours" value="13" maxlength="2">:
      <input type="text" class="form-control" name="fn-minutes" value="34" maxlength="2">:
      <input type="text" id="fn-seconds" class="form-control" name="fn-seconds" value="59" maxlength="2">
      <span class="units offset">hh:mm:ss</span>
    </div>

    <div class="form-group">
      <div class="col-sm-2 col-sm-offset-2">
        <input type="button" id="elapsed" class="btn btn-default" value="Elapsed Time">

      </div>
    </div>

  </form>
