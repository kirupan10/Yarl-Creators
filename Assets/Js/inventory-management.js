
    let items = [
    {
        name: "Canon EOS R6",
    category: "Camera",
    stock: 8,
    price: 380000,
    image: "../Assets/images/camera.png"
        },
    {
        name: "Sony A7 IV",
    category: "Camera",
    stock: 10,
    price: 420000,
    image: "../Assets/images/cam2.png"
        },
    {
        name: "DJI RS 3",
    category: "Stabilizer",
    stock: 6,
    price: 130000,
    image: "../Assets/images/rs.png"
        },
    {
        name: "Godox VL150",
    category: "Lighting",
    stock: 5,
    price: 65000,
    image: "../Assets/images/gd.png"
        },
    {
        name: "Manfrotto Tripod",
    category: "Accessory",
    stock: 12,
    price: 28000,
    image: "../Assets/images/tr.png"
        }
    ];

    function renderTable() {
        const search = document.getElementById("searchInput").value.toLowerCase();
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
            filtered.forEach(item => {
                const row = `
    <tr>
        <td><img src="${item.image}" alt="${item.name}" /></td>
        <td>${item.name}</td>
        <td>${item.category}</td>
        <td>${item.stock}</td>
        <td>LKR ${item.price.toLocaleString()}</td>
        <td class="actions">
            <button class="edit">✎ Edit</button>
            <button class="delete">🗑 Delete</button>
        </td>
    </tr>
    `;
    tableBody.insertAdjacentHTML("beforeend", row);
            });
        }
    }

    function previewImage(event) {
        const preview = document.getElementById("preview");
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.style.display = "block";
    }

    function openModal() {
        document.getElementById("productModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("productModal").style.display = "none";

    // Reset form
    document.getElementById("productName").value = "";
    document.getElementById("productStock").value = "";
    document.getElementById("productPrice").value = "";
    document.getElementById("imageUpload").value = "";
    document.getElementById("preview").style.display = "none";
    document.getElementById("preview").src = "";
    }

    function addProduct() {
        const name = document.getElementById("productName").value.trim();
    const category = document.getElementById("productCategory").value;
    const stock = document.getElementById("productStock").value;
    const price = document.getElementById("productPrice").value;
    const imageInput = document.getElementById("imageUpload");

    if (!name || !stock || !price || !imageInput.files.length) {
        alert("Please fill all fields and select an image.");
    return;
        }

    const imageURL = URL.createObjectURL(imageInput.files[0]);

    items.push({
        name: name,
    category: category,
    stock: parseInt(stock),
    price: parseInt(price),
    image: imageURL
        });

    closeModal();
    renderTable();
    }

    document.getElementById("searchInput").addEventListener("input", renderTable);
    document.getElementById("categoryFilter").addEventListener("change", renderTable);

    window.addEventListener('click', function (e) {
        const modal = document.getElementById("productModal");
    if (e.target === modal) closeModal();
    });

    window.onload = renderTable;

