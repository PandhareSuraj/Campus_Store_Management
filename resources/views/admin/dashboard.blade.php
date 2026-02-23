<!DOCTYPE html>
<html>
<head>
    <title>Premium Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 min-h-screen p-8">

<!-- Top Navbar -->
<div class="flex justify-between items-center bg-white/60 backdrop-blur-lg shadow-xl rounded-2xl p-5 mb-8 border border-purple-200">

    <h1 class="text-3xl font-bold text-purple-600 tracking-wide">
        Campus Store Admin
    </h1>

    <!-- Profile -->
    <div class="flex items-center gap-4 cursor-pointer group">
        <img src="https://i.pravatar.cc/150?img=12"
             class="w-14 h-14 rounded-full border-4 border-purple-300 shadow-md group-hover:scale-110 transition duration-300">
        <div>
            <p class="font-semibold text-purple-700">Siddharth</p>
            <p class="text-sm text-purple-400">Administrator</p>
        </div>
    </div>
</div>

<!-- Menu -->
<div class="bg-white/50 backdrop-blur-lg shadow-lg rounded-2xl p-5 mb-10 border border-purple-200">
    <div class="flex justify-center gap-10 text-lg font-semibold text-purple-700">
        <button onclick="showSection('home')" class="menu-btn">Home</button>
        <button onclick="showSection('pending')" class="menu-btn">Pending Request</button>
        <button onclick="showSection('approved')" class="menu-btn">Approved Request</button>
        <button onclick="showSection('stock')" class="menu-btn">Stock</button>
        <button onclick="showSection('contact')" class="menu-btn">Contact</button>
    </div>
</div>

<!-- Sections Container -->
<div class="max-w-4xl mx-auto">

    <!-- Home -->
    <div id="home" class="section glass-card">
        <h2 class="title">Welcome Back 👋</h2>
        <p class="desc">Manage your campus store efficiently from this dashboard.</p>
    </div>

    <!-- Pending -->
    <div id="pending" class="section glass-card hidden">
        <h2 class="title">Pending Requests</h2>
        <p class="desc">No pending stationery requests.</p>
    </div>

    <!-- Approved -->
    <div id="approved" class="section glass-card hidden">
        <h2 class="title">Approved Requests</h2>
        <p class="desc">All approved requests will appear here.</p>
    </div>

    <!-- Stock -->
    <div id="stock" class="section glass-card hidden">
        <h2 class="title mb-6">Stock Management</h2>

        <div class="flex gap-6 justify-center">
            <button class="btn-blue">Add Stock</button>
            <button class="btn-green">Maintain Stock</button>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="section glass-card hidden text-center">
        <h2 class="title mb-4">Contact Support</h2>
        <p class="desc">📧 admin@campusstore.com</p>
        <p class="desc mt-2">📞 +91 9876543210</p>
        <p class="desc mt-2">📍 Campus Store Office</p>
    </div>

</div>


<!-- Styles -->
<style>
.menu-btn {
    position: relative;
    padding-bottom: 5px;
    transition: 0.3s;
}
.menu-btn:hover {
    color: #a78bfa;
}
.menu-btn::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    background: #a78bfa;
    left: 0;
    bottom: 0;
    transition: 0.3s;
}
.menu-btn:hover::after {
    width: 100%;
}

.glass-card {
    background: rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 10px 30px rgba(167, 139, 250, 0.2);
    margin-bottom: 30px;
    transition: 0.4s ease;
    border: 1px solid rgba(196, 181, 253, 0.5);
}
.glass-card:hover {
    transform: translateY(-5px);
}

.title {
    font-size: 26px;
    font-weight: bold;
    color: #7c3aed;
}
.desc {
    color: #6b7280;
}

.btn-blue {
    background: linear-gradient(45deg, #93c5fd, #c4b5fd);
    color: #1f2937;
    padding: 12px 28px;
    border-radius: 12px;
    font-weight: 600;
    transition: 0.3s;
}
.btn-blue:hover {
    transform: scale(1.05);
}

.btn-green {
    background: linear-gradient(45deg, #a7f3d0, #bfdbfe);
    color: #1f2937;
    padding: 12px 28px;
    border-radius: 12px;
    font-weight: 600;
    transition: 0.3s;
}
.btn-green:hover {
    transform: scale(1.05);
}
</style>


<!-- Script -->
<script>
function showSection(id) {
    document.querySelectorAll('.section').forEach(section => {
        section.classList.add('hidden');
    });
    document.getElementById(id).classList.remove('hidden');
}
</script>

</body>
</html>