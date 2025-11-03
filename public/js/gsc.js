const typeSelect = document.getElementById("type-select");
const tanggalTemu = document.getElementById("tanggal-temu");

// Add an event listener to the select element
typeSelect.addEventListener("change", function () {
    if (typeSelect.value === "on-site") {
        tanggalTemu.style.display = "block"; // Show the "Tanggal Temu" field
    } else {
        tanggalTemu.style.display = "none"; // Hide the "Tanggal Temu" field
    }
});

// Trigger change event on page load to handle pre-filled value
window.addEventListener("DOMContentLoaded", function () {
    typeSelect.dispatchEvent(new Event("change"));
});

document.addEventListener("DOMContentLoaded", function () {
    const tanggalInput = document.getElementById("tanggal");
    const today = new Date();

    // Add 3 days to the current date
    const minDate = new Date();
    minDate.setDate(today.getDate() + 3);

    // Format the date to `YYYY-MM-DD`
    const formattedDate = minDate.toISOString().split("T")[0];

    // Set the `min` attribute of the input field
    tanggalInput.setAttribute("min", formattedDate);
});
