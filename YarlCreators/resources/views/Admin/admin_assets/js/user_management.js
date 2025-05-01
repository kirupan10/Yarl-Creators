const users = [
    { name: "John Doe", email: "john@example.com", role: "admin", profile: "../Assets/images/Profile/m1.jpg" },
    { name: "Jane Smith", email: "jane@example.com", role: "user", profile: "../Assets/images/Profile/m2.jpg" }
];

function renderUsers() {
    const searchQuery = document.getElementById('searchUser').value.toLowerCase();
    const list = document.getElementById('userList');
    list.innerHTML = '';

    users
        .filter(user => user.name.toLowerCase().includes(searchQuery) || user.role.toLowerCase().includes(searchQuery))
        .forEach((user, index) => {
            list.innerHTML += `
            <tr>
              <td><img class="profile-img" src="${user.profile}" alt="${user.name}"></td>
              <td>${user.name}</td>
              <td>${user.email}</td>
              <td>${user.role.charAt(0).toUpperCase() + user.role.slice(1)}</td>
              <td>
                <button class="action-btn edit-btn" onclick="editUser(${index})">✏ Edit</button>
                <button class="action-btn delete-btn" onclick="deleteUser(${index})">🗑 Delete</button>
              </td>
            </tr>
          `;
        });
}

function openForm() {
    document.getElementById('userModal').style.display = 'flex';
}

function closeForm() {
    document.getElementById('userModal').style.display = 'none';
}

function saveUser() {
    const name = document.getElementById('userName').value;
    const email = document.getElementById('userEmail').value;
    const role = document.getElementById('userRole').value;
    users.push({ name, email, role, profile: "../Assets/images/placeholder-profile.png" });
    closeForm();
    renderUsers();
}

function editUser(index) {
    const user = users[index];
    document.getElementById('formTitle').textContent = 'Edit User';
    document.getElementById('userName').value = user.name;
    document.getElementById('userEmail').value = user.email;
    document.getElementById('userRole').value = user.role;
    openForm();
}

function deleteUser(index) {
    if (confirm('Are you sure to delete?')) {
        users.splice(index, 1);
        renderUsers();
    }
}

window.onload = renderUsers;