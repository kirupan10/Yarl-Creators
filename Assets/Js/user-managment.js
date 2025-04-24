let users = [
    { name: 'John Doe', email: 'john@example.com', role: 'admin' },
    { name: 'Jane Smith', email: 'jane@example.com', role: 'editor' },
];

let isEditing = false;
let editIndex = null;

function renderUsers() {
    const list = document.getElementById("userList");
    const search = document.getElementById("searchUser").value.toLowerCase();
    list.innerHTML = "";

    const filtered = users.filter(user =>
        user.name.toLowerCase().includes(search) || user.role.toLowerCase().includes(search)
    );

    filtered.forEach((user, index) => {
        const row = `
      <tr>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.role}</td>
        <td class="actions">
          <button class="edit" onclick="editUser(${index})">✎ Edit</button>
          <button class="delete" onclick="deleteUser(${index})">🗑 Delete</button>
        </td>
      </tr>
    `;
        list.insertAdjacentHTML("beforeend", row);
    });
}

function openForm() {
    isEditing = false;
    document.getElementById("formTitle").textContent = "Add User";
    document.getElementById("userName").value = "";
    document.getElementById("userEmail").value = "";
    document.getElementById("userRole").value = "admin";
    document.getElementById("userModal").style.display = "flex";
}

function closeForm() {
    document.getElementById("userModal").style.display = "none";
}

function saveUser() {
    const name = document.getElementById("userName").value;
    const email = document.getElementById("userEmail").value;
    const role = document.getElementById("userRole").value;

    if (name && email && role) {
        if (isEditing) {
            users[editIndex] = { name, email, role };
        } else {
            users.push({ name, email, role });
        }
        closeForm();
        renderUsers();
    }
}

function editUser(index) {
    isEditing = true;
    editIndex = index;
    const user = users[index];
    document.getElementById("formTitle").textContent = "Edit User";
    document.getElementById("userName").value = user.name;
    document.getElementById("userEmail").value = user.email;
    document.getElementById("userRole").value = user.role;
    document.getElementById("userModal").style.display = "flex";
}

function deleteUser(index) {
    if (confirm("Are you sure you want to delete this user?")) {
        users.splice(index, 1);
        renderUsers();
    }
}

document.getElementById("searchUser").addEventListener("input", renderUsers);
window.onload = renderUsers;
