const data = JSON.parse(localStorage.getItem('bookingDetails')) || {};
const box = document.getElementById('summaryBox');

const imageMap = {
    photography: "Acc.jpg",
    videography: "pai.jpg",
    documentary: "Skt.jpg"
};

if (data && box) {
    const imageSrc = imageMap[data.service?.toLowerCase()] || "Acc.jpg";
    box.innerHTML = `
        <img src="./Assets/images/${imageSrc}" alt="${data.service}" />
        <div class="summary-details">
          <p><strong>Service:</strong> ${data.service || '—'}</p>
          <p><strong>Name:</strong> ${data.name || data.fullName || '—'}</p>
          <p><strong>Email:</strong> ${data.email || '—'}</p>
          <p><strong>Phone:</strong> ${data.phone || '—'}</p>
          <p><strong>Message:</strong> ${data.message || '—'}</p>
          <p><strong>Package:</strong> ${data.package || '—'}</p>
          <p><strong>Date:</strong> ${data.date || '—'}</p>
        </div>
      `;
}

function togglePaymentInputs() {
    const method = document.querySelector('input[name="payment"]:checked').value;
    document.getElementById('bankFields').classList.toggle('hidden', method !== 'bank');
    document.getElementById('cardFields').classList.toggle('hidden', method !== 'card');
}

function applyCoupon() {
    const code = document.getElementById('couponCode').value.trim();
    if (code.toUpperCase() === "YARL10") {
        alert("🎉 Coupon Applied! You received 10% off.");
    } else {
        alert("⚠️ Invalid Coupon Code");
    }
}

function finalSubmit() {
    alert("✅ Booking confirmed! You'll receive a confirmation email.");
    localStorage.clear();
    window.location.href = "index.html";
}