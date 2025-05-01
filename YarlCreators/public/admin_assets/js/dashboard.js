flatpickr("#calendar", {
    inline: true,
    onDayCreate(_, __, ___, dayElem) {
        const date = dayElem.dateObj.toISOString().split("T")[0];
        const bookedDates = ["2025-04-10", "2025-04-15"];
        const holdDates = ["2025-04-20", "2025-04-25"];

        if (bookedDates.includes(date)) {
            dayElem.style.backgroundColor = "#EF233C";
            dayElem.style.color = "#fff";
            dayElem.title = "Booked";
        } else if (holdDates.includes(date)) {
            dayElem.style.backgroundColor = "#FFD700";
            dayElem.style.color = "#000";
            dayElem.title = "Hold";
        }
    }
});

// Scroll To Top
const scrollBtn = document.getElementById('scrollToTopBtn');
window.onscroll = () => {
    scrollBtn.style.display = window.scrollY > 400 ? 'block' : 'none';
};
scrollBtn.onclick = () => window.scrollTo({
    top: 0,
    behavior: 'smooth'
});

// Services Chart
new Chart(document.getElementById('servicesChart'), {
    type: 'bar',
    data: {
        labels: ['Photography', 'Videography', 'Documentary'],
        datasets: [{
            label: 'Bookings',
            data: [100, 60, 24],
            backgroundColor: ['#EF233C', '#8D99AE', '#2B2D42'],
            borderRadius: 8
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                grid: {
                    display: false
                }
            },
            y: {
                beginAtZero: true
            }
        }
    }
});

// Revenue Chart
new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Revenue',
            data: [200000, 250000, 300000, 350000, 400000, 425000],
            borderColor: '#EF233C',
            backgroundColor: 'rgba(239,35,60,0.2)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    color: '#2B2D42'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#2B2D42'
                }
            },
            y: {
                ticks: {
                    color: '#2B2D42'
                }
            }
        }
    }
});