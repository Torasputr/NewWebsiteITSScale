document.addEventListener("DOMContentLoaded", function () {
    const daftarSekarangButtons = document.querySelectorAll(
        ".daftar-sekarang-btn"
    );
    const applicationFormModal = document.getElementById(
        "applicationFormModal"
    );
    const applicationFormModalLabel = document.getElementById(
        "applicationFormModalLabel"
    );
    const applicationForm = document.getElementById("applicationForm");

    daftarSekarangButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            const positionName = button.getAttribute("data-position-name");
            const positionId = button.getAttribute("data-position-id");

            // Update the modal title
            applicationFormModalLabel.textContent = `Apply for ${positionName}`;

            // Update form action (optional, if you have different routes for each position)
            applicationForm.action = `/karir/${positionId}`;

            // Add any additional data you need to pass to the form
            // Example: Adding hidden input for position ID (if needed)
            let hiddenInput = applicationForm.querySelector(
                'input[name="position_id"]'
            );
            if (!hiddenInput) {
                hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.name = "position_id";
                applicationForm.appendChild(hiddenInput);
            }
            hiddenInput.value = positionId;
        });
    });
});
