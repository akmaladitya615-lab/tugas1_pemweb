<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body text-center py-4">
        <div class="mx-auto bg-dark text-white rounded-circle d-flex align-items-center justify-content-center mb-3" 
             style="width: 100px; height: 100px; font-size: 2.5rem; font-weight: bold; border: 5px solid #f8f9fa;">
            AP
        </div>
        
        <h6 class="fw-bold mb-0 text-uppercase" style="letter-spacing: 2px;">AKMAL ADITYA L.</h6>
        <small class="text-muted">Informatics Engineering</small>
        
        <hr class="mx-4 my-4 opacity-10">
        
        <div class="px-2">
            <a href="index.php?page=home" 
               class="nav-link-custom <?= ($page == 'home') ? 'active' : '' ?>">
                <i class="fas fa-home me-3"></i> Dashboard
            </a>

            <a href="index.php?page=about" 
               class="nav-link-custom <?= ($page == 'about') ? 'active' : '' ?>">
                <i class="fas fa-user me-3"></i> Profile
            </a>

            <a href="index.php?page=skills" 
               class="nav-link-custom <?= ($page == 'skills') ? 'active' : '' ?>">
                <i class="fas fa-code me-3"></i> Skills & Tools
            </a>

            <a href="index.php?page=studies" 
               class="nav-link-custom <?= ($page == 'studies') ? 'active' : '' ?>">
                <i class="fas fa-graduation-cap me-3"></i> My Studies
            </a>

            <a href="index.php?page=contact" 
               class="nav-link-custom <?= ($page == 'contact') ? 'active' : '' ?>">
                <i class="fas fa-envelope me-3"></i> Contact Me
            </a>

            <hr class="mx-2 my-3 opacity-10">

            <a href="logout.php" class="nav-link-custom text-danger">
                <i class="fas fa-sign-out-alt me-3"></i> Logout
            </a>
        </div>
    </div>
</div>

<style>
    /* CSS Tambahan untuk Sidebar agar mirip gambar */
    .nav-link-custom {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        margin-bottom: 10px;
        text-decoration: none;
        color: #6c757d;
        background-color: #ffffff;
        border-radius: 12px;
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        font-weight: 500;
    }

    /* Efek Hover untuk menu umum */
    .nav-link-custom:hover {
        background-color: #f8f9fa;
        color: #333;
        transform: translateX(5px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    /* Efek Khusus Hover Logout (Merah) */
    .nav-link-custom.text-danger:hover {
        background-color: #fff5f5;
        color: #dc3545 !important;
        border-color: #feb2b2;
    }

    .nav-link-custom.active {
        background-color: #ffffff;
        color: #212529;
        border: 1px solid #dee2e6;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .nav-link-custom i {
        width: 20px;
        font-size: 1.1rem;
    }

    .rounded-4 {
        border-radius: 1.5rem !important;
    }
</style>