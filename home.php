<?php
// pages/home.php
// File ini akan di-include oleh index.php di dalam area Main Content (9 Grid)
?>

<div class="row align-items-center">
    <div class="col-12">
        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4">
            <div class="row align-items-center">
                
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="assets/img/akmal.jpeg" alt="Akmal Aditya" 
                         class="img-fluid rounded-4 shadow-sm object-fit-cover" 
                         style="width: 100%; max-width: 200px; height: 200px; border: 5px solid #fff;"
                         onerror="this.src='https://via.placeholder.com/200?text=Foto+Akmal'">
                </div>

                <div class="col-md-8 ps-md-4 text-center text-md-start">
                    <h6 class="text-uppercase text-muted fw-bold mb-1" style="letter-spacing: 2px; font-size: 0.8rem;">
                        INTRODUCTION
                    </h6>
                    <h1 class="display-5 fw-bold mb-3 text-dark text-uppercase" style="letter-spacing: 1px;">
                        WELCOME TO <br class="d-none d-lg-inline"> MY PORTFOLIO
                    </h1>
                    <p class="lead text-secondary mb-4 lh-lg" style="font-size: 1.05rem;">
                        Halo! Nama saya Akmal Aditya L, mahasiswa Teknik Informatika di STT Terpadu Nurul Fikri. Saya adalah seorang Junior Developer yang antusias dalam membangun solusi digital yang efisien, user-friendly, dan inovatif.
                    </p>
                    
                    <a href="index.php?page=contact" class="btn btn-dark btn-lg rounded-3 px-5 py-3 fw-bold text-uppercase shadow-sm hover-lift" style="letter-spacing: 1px; font-size: 0.9rem;">
                        HUBUNGI SAYA <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    /* CSS Tambahan khusus untuk halaman home agar mirip referensi */
    
    /* Efek angkat saat tombol di-hover */
    .hover-lift {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.1) !important;
    }

    /* Penyesuaian class rounded Bootstrap */
    .rounded-4 {
        border-radius: 1rem !important;
    }

    /* Memastikan teks strong tebal */
    .lead strong {
        font-weight: 700;
        color: #333;
    }
    
    /* Responsive adjustment untuk teks besar */
    @media (max-width: 768px) {
        .display-5 {
            font-size: 2.2rem;
        }
    }
</style>