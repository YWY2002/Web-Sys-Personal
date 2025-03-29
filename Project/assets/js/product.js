let adultCount = 1;
let childCount = 0;

function adjustGuests(type, change) {
  if (type === 'adult') {
    adultCount += change;
    if (adultCount < 1) adultCount = 1;
    document.getElementById('adult-count').innerText = adultCount;
  } else if (type === 'child') {
    childCount += change;
    if (childCount < 0) childCount = 0;
    document.getElementById('child-count').innerText = childCount;
  }
}

function checkAvailability() {
  var room_type = 'Deluxe'; // example, you could replace it with dynamic values
  var number_room = 1;
  var checkin_date = '2025-05-01'; // example, you can replace with actual input
  var checkout_date = '2025-05-10'; // example, you can replace with actual input

  // Create the URL for AJAX call
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "check_availability.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Send the room details to the server
  xhr.send("room_type=" + room_type + "&number_room=" + number_room + "&checkin_date=" + checkin_date + "&checkout_date=" + checkout_date);

  // Handle the response
  xhr.onload = function() {
      if (xhr.status == 200) {
          // Show the response message
          document.getElementById("availabilityMessage").style.display = "block";
          document.getElementById("availabilityMessage").innerHTML = xhr.responseText;
      } else {
          console.error("Error: " + xhr.statusText);
      }
  };
}

// Handle day selection
document.querySelectorAll('.day').forEach(day => {
  day.addEventListener('click', () => {
    document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
    day.classList.add('selected');
  });
});
