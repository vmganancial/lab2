document.addEventListener('DOMContentLoaded', function() {
    alert("Thank you for stepping into the world of my developing website! It's made even more special by your presence :)");
});

function showDateTime() {
  var currentDateTime = new Date();
  var formattedDateTime = currentDateTime.toLocaleString();
  document.getElementById("dateTime").innerHTML = "Current Date and Time: " + formattedDateTime;
}