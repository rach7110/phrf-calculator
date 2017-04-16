$(document).ready(function() {

  $('#elapsed').click(function(){
    var start_s = $('[name="st-seconds"]').val();
    var end_s = $('[name="fn-seconds"]').val();
    var start_m = $('[name="st-minutes"]').val();
    var end_m = $('[name="fn-minutes"]').val();
    var start_h = $('[name="st-hours"]').val();
    var end_h = $('[name="fn-hours"]').val();

    var seconds = elapsedTime(start_s, end_s) * 1;
    var minutes = elapsedTime(start_m, end_m) * 60;
    var hours = elapsedTime(start_h, end_h) * 3600;

    var total_seconds  = seconds + minutes + hours;

    var elapsed_time = convertSecondsToReadable(total_seconds);

  });
});

  function elapsedTime(start, end){
  var elapsed = parseInt(end) - parseInt(start);

  return elapsed;
  }

  function convertSecondsToReadable(totalSeconds) {
    var hours = Math.floor(totalSeconds / 3600);
    var remainingSeconds = totalSeconds % 3600;
    var minutes = Math.floor(remainingSeconds / 60);
    var seconds = totalSeconds % 60;

    console.log(hours);
    console.log(minutes);
    console.log(seconds);

    var readableTime = hours + ':' + minutes + ':' + seconds;

    console.log(readableTime);
    console.log(typeof(readableTime));

    return readableTime;

  };

// TODO: function validateHours(){  }



