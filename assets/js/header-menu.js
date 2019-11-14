window.onscroll = function () { menuScroll()}

var elementosNav = document.querySelectorAll(".textMenu");

function menuScroll() {
  if (document.documentElement.scrollTop > 50) {
    document.getElementById("menuHeader").classList.add("bg-secondary");
    document.getElementById("iconeMenu").classList.add("text-dark");
    elementosNav.forEach(function(elem) {
      elem.classList.add('text-dark');
    })
  } else {
    document.getElementById("menuHeader").classList.remove("bg-secondary");
    elementosNav.forEach(function(elem) {
      elem.classList.remove('text-dark');
    })
    document.getElementById("iconeMenu").classList.remove("text-dark");
  }
}