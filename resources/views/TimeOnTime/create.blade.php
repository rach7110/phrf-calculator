@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Time</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến tron
      </p>

      <!-- ELAPSED TIME -->
      @include('layouts.elapsed_time_calculator')

      <hr>
      <!-- TIME OF TIME CALCULATOR: -->
      <h5>Calculator</h5>
      <form class="form-inline">
        
        <div class="row">
          <div class="form-group col-md-2">
            <label class="sr-only" for="distance">A Factor</label>
            <input type="text" id="distance" class="form-control " name="distance" placeholder="A Factor">

          </div>

          <div class="form-group col-md-2">
            <label class="sr-only" for="rating">B Factor</label>
            <input type="text" id="rating" class="form-control" name="rating" placeholder="B Factor">
          </div>
        </div>

        <button type="submit" class="btn btn-default">Calculate</button>
      </form>      

    </div>
  </div>

@endsection