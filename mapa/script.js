

document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const answer = button.nextElementSibling;

    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
});

var map = L.map('map').setView([0, 0], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

var marker = L.marker([0, 0]).addTo(map);

navigator.geolocation.watchPosition(
  function(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    marker.setLatLng([lat, lon]);
    
    map.setView([lat, lon], 16);
  },
  function(error) {
    alert("No se pudo obtener la ubicación");
  },
  {
    enableHighAccuracy: true
  }
);
