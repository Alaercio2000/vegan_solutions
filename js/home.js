window.onscroll = function() {menuScroll()}

function menuScroll() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 425) {
      document.getElementById("menuHeader").className = "bg-secondary";
    } else {
      document.getElementById("menuHeader").className = "";
    }
  }