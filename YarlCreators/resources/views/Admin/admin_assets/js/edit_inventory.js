function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('itemImagePreview').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

document.getElementById('editItemForm').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Item updated successfully!');
    window.location.href = 'inventory-management.html'; // Redirect after save
});