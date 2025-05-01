const blogs = [
    {
        id: 1,
        title: "Wedding Highlight | Vimitha & Gokulan",
        date: "March 2025",
        category: "Wedding",
        image: "../Assets/images/wed.jpg",
        excerpt: "Every moment is a memory – watch how we brought their special day to life.",
        gallery: ["../Assets/images/bride.jpg", "../Assets/images/high.jpg", "../Assets/images/rece.jpg"]
    },
    {
        id: 2,
        title: "Event Branding & Media Solutions",
        date: "January 2025",
        category: "Event",
        image: "../Assets/images/evn.jpg",
        excerpt: "Lights, visuals, branding – we transform venues into experiences.",
        gallery: ["../Assets/images/event1.jpg", "../Assets/images/event2.jpg", "../Assets/images/event3.jpg"]
    },
    {
        id: 3,
        title: "Tiny Toes, Big Smiles",
        date: "February 2025",
        category: "Photography",
        image: "../Assets/images/bab.jpg",
        excerpt: "Capturing the beautiful innocence of little ones.",
        gallery: ["../Assets/images/baby1.jpg", "../Assets/images/baby2.jpg", "../Assets/images/baby3.jpg"]
    }
];

let selectedBlogId = null;

function renderBlogs() {
    const blogList = document.getElementById("blogList");
    blogList.innerHTML = "";
    blogs.forEach((blog, index) => {
        blogList.innerHTML += `
        <div class="blog-card" onclick="openModal(${index})">
          <img src="${blog.image}" alt="${blog.title}">
          <div class="info">
            <h2>${blog.title}</h2>
            <p>By Yarl Creators · ${blog.date} · #${blog.category}</p>
          </div>
        </div>
      `;
    });
}

function openModal(index) {
    const blog = blogs[index];
    selectedBlogId = blog.id;
    document.getElementById('modalImage').src = blog.image;
    document.getElementById('modalTitle').textContent = blog.title;
    document.getElementById('modalMeta').textContent = `By Yarl Creators · ${blog.date} · #${blog.category}`;
    document.getElementById('modalExcerpt').textContent = blog.excerpt;
    const gallery = document.getElementById('modalGallery');
    gallery.innerHTML = blog.gallery.map(img => `<img src="${img}" alt="Gallery Image">`).join('');
    document.getElementById('blogModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('blogModal').style.display = 'none';
}

function goToEditPage() {
    if (selectedBlogId !== null) {
        window.location.href = `edit-blog.html?id=${selectedBlogId}`;
    }
}

window.onload = renderBlogs;