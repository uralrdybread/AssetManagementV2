function confirmDelete(assetId) {
    if (confirm("Are you sure you want to delete this asset?")) {
        document.getElementById("deleteForm_" + assetId).submit();
    }
}


    document.addEventListener("DOMContentLoaded", function() {
        const openDeleteModalButton = document.getElementById("openDeleteModalButton");
        const deleteConfirmationModal = document.getElementById("deleteConfirmationModal");
        const confirmDeleteButton = document.getElementById("confirmDeleteButton");
        const cancelDeleteButton = document.getElementById("cancelDeleteButton");
        let employeeIdToDelete;

        openDeleteModalButton.addEventListener("click", function() {
            employeeIdToDelete = @json($employeeId);
            deleteConfirmationModal.classList.remove("hidden");
        });

        confirmDeleteButton.addEventListener("click", function() {
            // Perform the deletion action here
            console.log("Deleting employee with ID:", employeeIdToDelete);
            // Once deletion is confirmed, you can trigger the actual deletion
            // For example, you can make an AJAX request to delete the employee
            // After successful deletion, you can hide the modal
            deleteConfirmationModal.classList.add("hidden");
        });

        cancelDeleteButton.addEventListener("click", function() {
            deleteConfirmationModal.classList.add("hidden");
        });
    });

