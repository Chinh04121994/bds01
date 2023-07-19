const r1Container = document.querySelector(".r1-container");
const items = document.querySelectorAll(".item-right");
let currentIndex = 0;

setInterval(() => {
  const firstChild = r1Container.firstElementChild;
  r1Container.style.animation = " roll 5s linear infinite";
  r1Container.style.transition="none";
  r1Container.removeChild(firstChild); 
  r1Container.appendChild(firstChild);
  
}, 5000);

$(document).ready(function(){
  $('#myCarousel').carousel({
      interval: 1000,
      pause: "hover",
      wrap: true
  });
});
$(document).ready(function() {
  $('ul.nav-item>li').click(function(event) {
    alert("click");
    window.location.href = $(this).find('a').attr('href');
  });
});