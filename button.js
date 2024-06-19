// Create a button element
let button = document.createElement('button');
button.textContent = 'Click me to get a random number';

// Add an event listener to the button
button.addEventListener('click', function () {
    // Generate a random number between 1 and 10
    let randomNumber = Math.floor(Math.random() * 10) + 1;
    // Display an alert with the random number
    alert('Random Number: ' + randomNumber);
});

// Append the button to the body
document.body.appendChild(button);
