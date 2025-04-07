const bookedDates = ["2025-04-10", "2025-04-15"];
const holdDates = ["2025-04-18", "2025-04-20"];

flatpickr("#calendar", {
    inline: true,
    dateFormat: "Y-m-d",
    disable: bookedDates,
    onDayCreate: function (dObj, dStr, fp, dayElem) {
        const dateStr = dayElem.dateObj.toISOString().split("T")[0];
        if (bookedDates.includes(dateStr)) {
            dayElem.style.backgroundColor = "#E53935";
            dayElem.style.color = "#fff";
        } else if (holdDates.includes(dateStr)) {
            dayElem.style.backgroundColor = "#FFC107";
            dayElem.style.color = "#000";
        }
    },
    onChange: function (selectedDates, dateStr) {
        document.getElementById("eventDate").value = dateStr;
    }
});

function showPackages() {
    const service = document.getElementById("service").value;
    const packageGroup = document.getElementById("packageGroup");

    const packages = {
        Photography: [
            { name: "Basic", price: "10,000", details: "2 hrs, 50 photos, 1 video" },
            { name: "Premium", price: "25,000", details: "Half day, 100 photos, drone" },
            { name: "Elite", price: "50,000", details: "Full day, all edits, 4K + drone" }
        ],
        Videography: [
            { name: "Standard", price: "15,000", details: "Event video, HD cut" },
            { name: "Cinematic", price: "30,000", details: "Full day, cinematic, drone" },
            { name: "Director's Cut", price: "60,000", details: "Full edit, drone, 4 angles" }
        ],
        Documentary: [
            { name: "Concept", price: "20,000", details: "Concept video, script, voiceover" },
            { name: "Advanced", price: "40,000", details: "Full production, storyboard, narration" },
            { name: "Broadcast", price: "65,000", details: "TV-ready, professional grade" }
        ]
    };

    packageGroup.innerHTML = "";
    if (packages[service]) {
        packages[service].forEach((pkg, index) => {
            const id = `package-${index}`;
            packageGroup.innerHTML += `
            <label class="package-card" onclick="selectPackage('${id}')">
              <input type="radio" name="package" id="${id}" class="package-radio" value="${pkg.name} - LKR ${pkg.price}" required>
              <strong>${pkg.name} – LKR ${pkg.price}</strong>
              <small>${pkg.details}</small>
            </label>`;
        });
    }
}

function selectPackage(id) {
    document.querySelectorAll('.package-card').forEach(card => card.classList.remove('selected'));
    const radio = document.getElementById(id);
    if (radio) {
        radio.checked = true;
        radio.closest('.package-card').classList.add('selected');
    }
}

document.getElementById("bookingForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const selectedPackage = document.querySelector("input[name='package']:checked");
    if (!selectedPackage) {
        alert("⚠️ Please select a package to continue.");
        return;
    }

    const data = {
        service: document.getElementById("service").value,
        date: document.getElementById("eventDate").value,
        name: document.getElementById("fullName").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value,
        package: selectedPackage.value,
    };

    localStorage.setItem("bookingDetails", JSON.stringify(data));
    window.location.href = "checkout.html";
});