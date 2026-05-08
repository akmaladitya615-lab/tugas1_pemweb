<?php
// pages/about.php
?>
<div class="card shadow-sm border-0">
    <div class="card-body">
        <h3 class="mb-4 text-center">About Me</h3>
        <div class="accordion" id="accordionAbout">
            <!-- Item 1: Visi -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        Visi & Misi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAbout">
                    <div class="accordion-body">
                        Menjadi seorang full-stack developer yang handal dan mampu memberikan solusi digital yang bermanfaat bagi masyarakat.
                    </div>
                </div>
            </div>
            <!-- Item 2: Pendidikan -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        Pendidikan
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAbout">
                    <div class="accordion-body">
                        Saat ini saya sedang menempuh pendidikan Teknik Informatika di STT Terpadu Nurul Fikri (STTNF).
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>