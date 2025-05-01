const existingGallery = [
    "../Assets/images/bride.jpg",
    "../Assets/images/high.jpg",
    "../Assets/images/rece.jpg"
];

function loadExistingGallery() {
    const galleryPreview = document.getElementById('galleryPreview');
    existingGallery.forEach(img => {
        const imageElement = document.createElement('img');
        imageElement.src = img;
        galleryPreview.appendChild(imageElement);
    });
}

function previewMainImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('mainImagePreview').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewGallery(event) {
    const galleryPreview = document.getElementById('galleryPreview');
    Array.from(event.target.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function () {
            const img = document.createElement('img');
            img.src = reader.result;
            galleryPreview.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}

document.getElementById('editBlogForm').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Blog updated successfully!');
    window.location.href = 'blog-management.html';
});

window.onload = loadExistingGallery;