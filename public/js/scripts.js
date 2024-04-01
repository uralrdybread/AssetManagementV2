function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this asset?")) {
        deleteAsset(url);
    }
}

function deleteAsset(url) {
    fetch(url, {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
    })
        .then((response) => {
            if (response.ok) {
                // Reload the page or update the asset list
                location.reload();
            } else {
                throw new Error("Failed to delete asset");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            // Handle error, show error message, etc.
        });
}
