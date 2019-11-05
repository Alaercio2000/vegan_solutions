window.onscroll = function() {menuScroll()}

function menuScroll() {
    if (document.documentElement.scrollTop > 410) {
      document.getElementById("menuHeader").className = "bg-secondary";
    } else {
      document.getElementById("menuHeader").className = "";
    }
  }