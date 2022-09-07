const span = document.getElementById("tel-nummer");

span.addEventListener("click", function(event) {
  event.preventDefault();
  navigator.clipboard.writeText(span.textContent);
});