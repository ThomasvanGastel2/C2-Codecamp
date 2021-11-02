//Time and date

n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

function Time() {
  // Creating object of the Date class
  var date = new Date();
  // Get current hour
  var hour = date.getHours();
  // Get current minute
  var minute = date.getMinutes();
  // Get current second
  var second = date.getSeconds();
  // Variable to store AM / PM
  var period = "";
  // Assigning AM / PM according to the current hour
  if (hour >= 12) {
  period = "PM";
  } else {
  period = "AM";
  }
  // Converting the hour in 12-hour format
  if (hour == 0) {
  hour = 12;
  } else {
  if (hour > 12) {
  hour = hour - 12;
  }
  }
  // Updating hour, minute, and second
  // if they are less than 10
  hour = update(hour);
  minute = update(minute);
  second = update(second);
 // Adding time elements to the div
 document.getElementById("digital-clock").innerText = hour + " : " + minute + " : " + second + " " + period;
 // Set Timer to 1 sec (1000 ms)
 setTimeout(Time, 1000);
}
 // Function to update time elements if they are less than 10
 // Append 0 before time elements if they are less than 10
function update(t) {
 if (t < 10) {
 return "0" + t;
 }
 else {
 return t;
 }
}
Time();

//----------------------------------------------------------------------------------------------------------------------------------------------------------

//spoiler
var divToggleVis = document.getElementById('spoiler_text');
var button = document.getElementById('spoiler_button');

button.onclick = function() {
    if (divToggleVis.className === 'fadeout') {
        divToggleVis.className = 'fadein';
    } else {
        divToggleVis.className = 'fadeout';
    }

    if (button.innerHTML === 'Show Spoilers') {
        button.innerHTML = 'Hide Spoilers';
    } else {
        button.innerHTML = 'Show Spoilers';
    }
};