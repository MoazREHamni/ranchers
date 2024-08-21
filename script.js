// Initialize Leaflet map
var map = L.map('map').setView([51.505, -0.09], 13); // Center coordinates and zoom level

// Add OpenStreetMap tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map);

// Example: Adding a marker with a popup
var marker = L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('Hello, world!')
    .openPopup();



    // Example of updating marker position (simulate real-time update)
function updateMarker(lat, lng) {
    marker.setLatLng([lat, lng]);
    map.setView([lat, lng], map.getZoom()); // Optional: Center map on the updated position
}

// Simulate real-time updates (replace with actual data fetching logic)
setInterval(function() {
    var newLat = Math.random() * (52 - 50) + 50; // Example: random latitude within a range
    var newLng = Math.random() * (0 - (-2)) + (-2); // Example: random longitude within a range
    updateMarker(newLat, newLng);
}, 5000); // Update every 5 seconds (adjust as needed)
