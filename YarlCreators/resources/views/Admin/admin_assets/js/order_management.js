const orders = [
    { id: 1001, customer: 'John Doe', product: 'Canon EOS R6', date: '2025-04-10', total: 425000, status: 'Pending' },
    { id: 1002, customer: 'Jane Smith', product: 'DJI RS 3', date: '2025-04-12', total: 130000, status: 'Processing' },
    { id: 1003, customer: 'Ravi Kumar', product: 'Sony A7 IV', date: '2025-04-14', total: 420000, status: 'Completed' },
    { id: 1004, customer: 'Sara Khan', product: 'Manfrotto Tripod', date: '2025-04-16', total: 28000, status: 'Cancelled' }
];

function renderOrders() {
    const search = document.getElementById("searchInput").value.toLowerCase();
    const tableBody = document.getElementById("orderTable");
    const noResults = document.getElementById("noResults");

    const filtered = orders.filter(o =>
        o.customer.toLowerCase().includes(search) ||
        o.product.toLowerCase().includes(search) ||
        o.status.toLowerCase().includes(search)
    );

    tableBody.innerHTML = "";

    if (filtered.length === 0) {
        noResults.style.display = "block";
    } else {
        noResults.style.display = "none";
        filtered.forEach((o, index) => {
            const row = `
            <tr>
              <td>${o.id}</td>
              <td>${o.customer}</td>
              <td>${o.product}</td>
              <td>${o.date}</td>
              <td>LKR ${o.total.toLocaleString()}</td>
              <td><span class="status-badge ${o.status}">${o.status}</span></td>
              <td>
                <select onchange="changeStatus(${index}, this)" class="status-dropdown">
                  <option value="Pending" ${o.status === "Pending" ? "selected" : ""}>Pending</option>
                  <option value="Processing" ${o.status === "Processing" ? "selected" : ""}>Processing</option>
                  <option value="Completed" ${o.status === "Completed" ? "selected" : ""}>Completed</option>
                  <option value="Cancelled" ${o.status === "Cancelled" ? "selected" : ""}>Cancelled</option>
                </select>
              </td>
            </tr>
          `;
            tableBody.insertAdjacentHTML("beforeend", row);
        });
    }
}

function changeStatus(index, selectElement) {
    orders[index].status = selectElement.value;
    renderOrders();
}

document.getElementById("searchInput").addEventListener("input", renderOrders);
window.onload = renderOrders;