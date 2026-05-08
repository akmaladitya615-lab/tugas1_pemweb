<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">AKMAL.DEV</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-collapse justify-content-end navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'home') ? 'active' : '' ?>" href="index.php?page=home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'about') ? 'active' : '' ?>" href="index.php?page=about">ABOUT</a>
                </li>
                
                <!-- My Studies Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studiesDropdown" role="button" data-bs-toggle="dropdown">
                        STUDIES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-menu-item" href="index.php?page=level">Manage Level</a></li>
                        <li><a class="dropdown-menu-item" href="index.php?page=studies">Manage Studies</a></li>
                    </ul>
                </li>

                <!-- Dynamic Login/Logout Button -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle btn btn-outline-light px-3 text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-user-circle me-1"></i> <?= $_SESSION['username'] ?> (<?= $_SESSION['role'] ?>)
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-light px-4" href="index.php?page=login">LOGIN</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>