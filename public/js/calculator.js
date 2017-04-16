$(document).ready(function() {

  $('#elapsed').click(function(){
    // GET TIME FROM USER INPUTS:
    var start_s = $('[name="st-seconds"]').val();
    var end_s = $('[name="fn-seconds"]').val();
    var start_m = $('[name="st-minutes"]').val();
    var end_m = $('[name="fn-minutes"]').val();
    var start_h = $('[name="st-hours"]').val();
    var end_h = $('[name="fn-hours"]').val();

    // CALCULATE ELAPSED TIME:
    var seconds = elapsed(start_s, end_s) * 1;
    var minutes = elapsed(start_m, end_m) * 60;
    var hours = elapsed(start_h, end_h) * 3600;

    var totalSeconds  = seconds + minutes + hours;

    var elapsed_time = convertTotalSecondsToTime(totalSeconds);

    // SET ELPASED TIME FIELDS:
    $('[name="seconds"]').val(elapsed_time.seconds);
    $('[name="minutes"]').val(elapsed_time.minutes);
    $('[name="hours"]').val(elapsed_time.hours);
    $('#total_seconds').attr('value', elapsed_time.total);

    console.log(typeof(elapsed_time.total));
  });
});

  function elapsed(start, end){
    var elapsed = parseInt(end) - parseInt(start);

    return elapsed;
  }

  function convertTotalSecondsToTime(totalSeconds) {
    var total = totalSeconds;
    var hours = Math.floor(totalSeconds / 3600);
    var remainingSeconds = totalSeconds % 3600;
    var minutes = Math.floor(remainingSeconds / 60);
    var seconds = totalSeconds % 60;

    var time = {
      total: total,
      hours:  hours,
      minutes: minutes,
      seconds: seconds
    };
    
    return time;
  }


// TODO: function validateHours(){  }



