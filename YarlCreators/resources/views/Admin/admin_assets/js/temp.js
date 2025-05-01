// Revenue Trend
new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Revenue (LKR)',
            data: [150000, 180000, 200000, 220000, 250000, 275000],
            borderColor: '#EF233C',
            backgroundColor: 'rgba(239,35,60,0.2)',
            fill: true,
            tension: 0.4
        }]
    },
    options: { responsive: true }
});

// Service Bookings
new Chart(document.getElementById('serviceChart'), {
    type: 'bar',
    data: {
        labels: ['Photography', 'Videography', 'Drone', 'Editing'],
        datasets: [{
            label: 'Bookings',
            data: [80, 55, 30, 40],
            backgroundColor: ['#EF233C', '#8D99AE', '#2B2D42', '#D90429'],
            borderRadius: 8
        }]
    },
    options: { responsive: true, plugins: { legend: { display: false } } }
});

// Order Status
new Chart(document.getElementById('orderStatusChart'), {
    type: 'pie',
    data: {
        labels: ['Pending', 'Processing', 'Completed', 'Cancelled'],
        datasets: [{
            label: 'Orders',
            data: [20, 40, 120, 40],
            backgroundColor: ['#FFC107', '#3498db', '#2ecc71', '#e74c3c']
        }]
    },
    options: { responsive: true }
});