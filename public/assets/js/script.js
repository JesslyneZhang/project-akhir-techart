// Room Filter Toogle
const roomBtns = document.querySelectorAll(".room-btn");

roomBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        roomBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

// Map
document.addEventListener("DOMContentLoaded", function () {
    var map = L.map('map').setView([41.4993, -81.6944], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    L.marker([41.4993, -81.6944]).addTo(map);
});

// Toggle navbar menu on mobile
const menuCheckbox = document.getElementById('menu');
const menuIcon = document.getElementById('menu-icon');

menuCheckbox.addEventListener('change', () => {
  if(menuCheckbox.checked){
    menuIcon.classList.replace('bx-menu', 'bx-x');
  } else {
    menuIcon.classList.replace('bx-x', 'bx-menu');
  }
});

// Contact
document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();
  alert("Message sent successfully!");
  this.reset();
});

// Room detail
const thumbnails = document.querySelectorAll(".thumbnail img");
const mainImage = document.querySelector(".main-image img");

thumbnails.forEach(thumb => {
    thumb.addEventListener("click", () => {
        mainImage.src = thumb.src;
    });
});