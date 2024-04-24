// Calculate average number of weeks in human lifetime
const lifespanYears = 80;
const weeksInYear = 52;
const averageWeeksInLifetime = lifespanYears * weeksInYear;
alert("Average number of weeks in human lifetime: " + averageWeeksInLifetime);

// Get current hour
const currentHour = new Date().getHours();

// Determine time of the day
let timeOfDay;
if (currentHour >= 5 && currentHour < 12) {
  timeOfDay = "morning";
} else if (currentHour >= 12 && currentHour < 18) {
  timeOfDay = "afternoon";
} else {
  timeOfDay = "night";
}

// Display current time of the day and greeting
const timeElement = document.getElementById("time");
const greetingElement = document.getElementById("greeting");
timeElement.textContent = `Current time: ${getTime()}`;
greetingElement.textContent = `Good ${
  timeOfDay.charAt(0).toUpperCase() + timeOfDay.slice(1)
}!`;

// Function to get current time
function getTime() {
  const now = new Date().toLocaleTimeString();
  return now;
}

// Update time every second
setInterval(() => {
  timeElement.textContent = `Current time: ${getTime()}`;
}, 1000);
