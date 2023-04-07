// Create a new paragraph element
var p = document.createElement("p");

// Set the text content of the paragraph
p.textContent = "This is a new paragraph created with JavaScript.";

// Get a reference to the body element
var body = document.getElementsByTagName("body")[0];

// Add the paragraph to the body
body.appendChild(p);
