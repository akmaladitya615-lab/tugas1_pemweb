<?php
// Tentukan data skill (Bisa ditarik dari database jika ingin lebih dinamis)
$technical_skills = [
    ['name' => 'HTML5 & CSS3', 'level' => 90, 'color' => 'bg-orange'],
    ['name' => 'JavaScript', 'level' => 75, 'color' => 'bg-warning text-dark'],
    ['name' => 'PHP (Laravel/Django)', 'level' => 85, 'color' => 'bg-primary'],
    ['name' => 'MySQL Database', 'level' => 80, 'color' => 'bg-info text-dark'],
    ['name' => 'UI/UX Design (Figma)', 'level' => 70, 'color' => 'bg-danger'],
    ['name' => 'Linux Administration', 'level' => 65, 'color' => 'bg-dark'],
];

$tools = [
    ['name' => 'VS Code', 'icon' => 'fa-code'],
    ['name' => 'Git & GitHub', 'icon' => 'fa-git-alt'],
    ['name' => 'XAMPP', 'icon' => 'fa-server'],
    ['name' => 'Docker', 'icon' => 'fa-docker'],
];
?>

<div class="container-fluid">
    <div class="row">
        <!-- Technical Skills Section -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="fa fa-laptop-code me-2"></i>Technical Skills</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">Berikut adalah persentase penguasaan teknologi yang sering saya gunakan dalam pengembangan web dan sistem informasi.</p>
                    
                    <?php foreach ($technical_skills as $skill): ?>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold"><?= $skill['name'] ?></span>
                            <span class="text-muted"><?= $skill['level'] ?>%</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar <?= $skill['color'] ?> progress-bar-striped progress-bar-animated" 
                                 role="progressbar" 
                                 style="width: <?= $skill['level'] ?>%" 
                                 aria-valuenow="<?= $skill['level'] ?>" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Tools & Software Section -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="fa fa-tools me-2"></i>Tools & Software</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center g-3">
                        <?php foreach ($tools as $tool): ?>
                        <div class="col-6 col-md-3">
                            <div class="p-3 border rounded bg-light h-100">
                                <i class="fab <?= $tool['icon'] ?> fa-3x mb-3 text-dark"></i>
                                <h6 class="mb-0"><?= $tool['name'] ?></h6>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Color untuk progress bar jika tidak ada di Bootstrap default */
    .bg-orange { background-color: #fd7e14; color: white; }
    
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>