// Function to generate Fibonacci series
function generateFibonacci() {
  // Clear previous series
  document.getElementById("fibonacci").innerHTML = "";

  // Get the number of terms input by the user
  const numTerms = parseInt(document.getElementById("fib-num").value);

  // Initialize variables for the first two terms of the Fibonacci series
  let a = 0,
    b = 1;

  // Display Fibonacci series up to numTerms terms
  for (let i = 0; i < numTerms; i++) {
    // Add current term to the series container
    document.getElementById(
      "fibonacci"
    ).innerHTML += `<span class="fib-number" style="font-size:30px;">${a}</span>`;

    // Calculate next term
    let nextTerm = a + b;

    // Update values of a and b for the next iteration
    a = b;
    b = nextTerm;
  }
}
