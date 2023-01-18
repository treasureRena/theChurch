  document.getElementById("goCounter").style.display = "block";
    document.getElementById("goLive").style.display = "none";

// Set the date we're counting down to
var countDownDate = new Date("FEBRUARY 02, 2022 18:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s " + "to Next Live Meeting";

   document.getElementById("xDay").innerHTML = days;
   document.getElementById("xHour").innerHTML = hours;
   document.getElementById("xMin").innerHTML = minutes;
   document.getElementById("xSec").innerHTML = seconds;

   document.getElementById("xDay2").innerHTML = days;
   document.getElementById("xHour2").innerHTML = hours;
   document.getElementById("xMin2").innerHTML = minutes;
   document.getElementById("xSec2").innerHTML = seconds;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("goCounter").style.display = "none";
    document.getElementById("goLive").style.display = "block";
    $('#happening').blink({});
  }
}, 1000);
