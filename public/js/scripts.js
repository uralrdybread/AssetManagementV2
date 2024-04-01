function confirmDelete(assetId) {
    if (confirm("Are you sure you want to delete this asset?")) {
        document.getElementById("deleteForm_" + assetId).submit();
    }
}
