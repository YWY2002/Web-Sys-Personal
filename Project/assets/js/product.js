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
  let selectedDay = document.querySelector('.day.selected');
  if (!selectedDay) {
    alert("Please select a day!");
    return;
  }

  let selectedDate = selectedDay.innerText;
  let roomPrice = selectedDay.getAttribute('data-price');
  alert(`Availability checked for ${selectedDate} - Price: S$${roomPrice}`);
}

// Handle day selection
document.querySelectorAll('.day').forEach(day => {
  day.addEventListener('click', () => {
    document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
    day.classList.add('selected');
  });
});
