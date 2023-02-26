  // Get the button
  var btn = document.getElementById("topBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  btn.onclick = function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }