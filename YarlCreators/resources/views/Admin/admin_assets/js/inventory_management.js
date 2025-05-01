const items = [
    { name: "Canon EOS R6", category: "Camera", stock: 8, price: 380000, image: "../Assets/images/camera.png" },
    { name: "Sony A7 IV", category: "Camera", stock: 10, price: 420000, image: "../Assets/images/cam2.png" },
    { name: "DJI RS 3", category: "Stabilizer", stock: 6, price: 130000, image: "../Assets/images/rs.png" },
    { name: "Godox VL150", category: "Lighting", stock: 5, price: 65000, image: "../Assets/images/gd.png" },
    { name: "Manfrotto Tripod", category: "Accessory", stock: 12, price: 28000, image: "../Assets/images/tr.png" }
];

function renderTable() {
    const search = document.getElementById("inventorySearch").value.toLowerCase();
    const category = document.getElementById("categoryFilter").value;
    const tableBody = document.getElementById("inventoryTable");
    const noResults = document.getElementById("noResults");

    const filtered = items.filter(item =>
        (item.name.toLowerCase().includes(search) || item.category.toLowerCase().includes(search)) &&
        (category === "" || item.category === category)
    );

    tableBody.innerHTML = "";

    if (filtered.length === 0) {
        noResults.style.display = "block";
    } else {
        noResults.style.display = "none";
        filtered.forEach((item, index) => {
            const row = `
            <tr>
              <td>
                <div class="item-info">
                  <img src="${item.image}" alt="${item.name}" />
                  <span>${item.name}</span>
                </div>
              </td>
              <td>${item.category}</td>
              <td>${item.stock}</td>
              <td>LKR ${item.price.toLocaleString()}</td>
              <td class="actions">
                <button class="edit" onclick="editItem(${index})">✎ Edit</button>
                <button class="delete" onclick="deleteItem(${index})">🗑 Delete</button>
              </td>
            </tr>
          `;
            tableBody.insertAdjacentHTML("beforeend", row);
        });
    }
}

function goToAddPage() {
    window.location.href = "add-inventory.html";
}

function editItem(index) {
    window.location.href = `edit-inventory.html?id=${index}`;
}

function deleteItem(index) {
    if (confirm('Are you sure you want to delete this item?')) {
        items.splice(index, 1);
        renderTable();
    }
}

document.getElementById("inventorySearch").addEventListener("input", renderTable);
document.getElementById("categoryFilter").addEventListener("change", renderTable);

window.onload = renderTable;