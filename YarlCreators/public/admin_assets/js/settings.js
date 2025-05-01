function changePhoto(event) {
    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('profilePic').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}