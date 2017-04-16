@extends('layouts.app')

@section('title')
@endsection

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Distance</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến tron
      </p>

      <!-- ELAPSED TIME -->
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


      <!-- TIME OF DISTANCE CALCULATOR: -->
      <hr>
      <h5>Calculator</h5>
      <form class="form-horizontal" action="{{route('tod')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- TIME -->
        <div class="form-group time">
          <label class="col-sm-2 control-label">Elapsed Time</label>
          <input type="text" class="form-control" name="hours" placeholder="00" disabled>:
          <input type="text" class="form-control" name="minutes" placeholder="00" disabled>:
          <input type="text" class="form-control" name="seconds" placeholder="00" disabled="">
          <span class="units offset">hh:mm:ss</span>
        </div>

        <input type=number id="total_seconds" name="total_seconds" hidden >

        <!-- DISTANCE -->
        <div class="form-group calc">
          <label class="col-sm-2 control-label" for="distance">Distance</label>
          <!-- <div class="col-sm-3"> -->
            <input type="number" id="distance" class="form-control " name="distance" placeholder="9.5" min=0 required>
            <span class="units offset">miles</span>
          <!-- </div> -->
        </div>
        <!-- RATING -->
        <div class="form-group calc">
          <label class="col-sm-2 control-label" for="rating">Rating</label>
          <!-- <div class="col-sm-3"> -->
            <input type="number" id="rating" class="form-control" name="rating" placeholder="108" required>
          <!-- </div> -->
        </div>

        <div class="form-group">
          <div class="col-sm-2 col-sm-offset-2">
            <button type="submit" class="btn btn-default">Calculate</button>
          </div>
        </div>

      </form>
    </div>
  </div>

@endsection