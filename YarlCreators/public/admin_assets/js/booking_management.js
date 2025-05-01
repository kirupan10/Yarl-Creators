const bookings = [
    {
        id: 1,
        name: "John Doe",
        nic: "123456789V",
        phone: "0771234567",
        email: "john@example.com",
        address: "123 Main Street, Jaffna",
        service: "Photography",
        package: "Elite",
        date: "2025-04-25",
        profile: "../Assets/images/profile/m1.jpg",
        status: "Pending",
        payment: "Bank Transfer",
        totalAmount: "LKR 100,000",
        paidAmount: "LKR 25,000"
    }
];

function renderBookings() {
    const table = document.getElementById("bookingTable");
    table.innerHTML = "";
    bookings.forEach((booking, index) => {
        table.innerHTML += `
          <tr>
            <td><img class="profile-img" src="${booking.profile}" alt="${booking.name}"></td>
            <td>${booking.name}</td>
            <td>${booking.service}</td>
            <td>${booking.package}</td>
            <td>${booking.date}</td>
            <td>
              <select onchange="changeStatus(${index}, this.value)">
                <option value="Pending" ${booking.status === "Pending" ? "selected" : ""}>Pending</option>
                <option value="Confirmed" ${booking.status === "Confirmed" ? "selected" : ""}>Confirmed</option>
                <option value="Cancelled" ${booking.status === "Cancelled" ? "selected" : ""}>Cancelled</option>
                <option value="Completed" ${booking.status === "Completed" ? "selected" : ""}>Completed</option>
              </select>
            </td>
            <td>
              <button class="view-btn" onclick="openModal(${index})">View</button>
              <button class="edit-btn" onclick="editBooking(${index})">Edit</button>
            </td>
          </tr>`;
    });
}

function changeStatus(index, value) {
    bookings[index].status = value;
    alert('Status changed to ' + value);
}

function openModal(index) {
    const booking = bookings[index];
    document.getElementById('modalProfile').src = booking.profile;
    document.getElementById('modalName').textContent = booking.name;
    document.getElementById('modalNIC').value = booking.nic;
    document.getElementById('modalPhone').value = booking.phone;
    document.getElementById('modalEmail').value = booking.email;
    document.getElementById('modalAddress').value = booking.address;
    document.getElementById('modalService').value = booking.service;
    document.getElementById('modalPackage').value = booking.package;
    document.getElementById('modalDate').value = booking.date;
    document.getElementById('modalPaymentMethod').value = booking.payment;
    document.getElementById('modalTotalAmount').value = booking.totalAmount;
    document.getElementById('modalPaidAmount').value = booking.paidAmount;
    document.getElementById('modalStatus').value = booking.status;
    document.getElementById('userModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('userModal').style.display = 'none';
}

function editBooking(index) {
    const booking = bookings[index];
    window.location.href = `edit-booking.html?id=${booking.id}`;
}

window.onload = function () {
    renderBookings();
}