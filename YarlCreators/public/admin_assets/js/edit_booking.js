window.onload = function () {
    document.getElementById('name').value = "John Doe";
    document.getElementById('nic').value = "123456789V";
    document.getElementById('phone').value = "0771234567";
    document.getElementById('email').value = "john@example.com";
    document.getElementById('address').value = "123 Main Street, Jaffna";
    document.getElementById('service').value = "Photography";
    document.getElementById('package').value = "Elite";
    document.getElementById('date').value = "2025-04-25";
    document.getElementById('payment').value = "Bank Transfer";
    document.getElementById('totalAmount').value = "LKR 100,000";
    document.getElementById('paidAmount').value = "LKR 25,000";
    document.getElementById('status').value = "Pending";
};

document.getElementById('editForm').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Booking details updated successfully!');
    window.location.href = 'booking-management.html';
});