<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-header bg-dark text-white text-center py-3">
                <h4 class="mb-0 fw-bold">Login Admin</h4>
            </div>
            <div class="card-body p-4">
                <?php if (isset($_SESSION['login_error'])): ?>
                    <div class="alert alert-danger border-0 shadow-sm text-center">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
                    </div>
                <?php endif; ?>
                
                <form action="proses_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control rounded-3" id="username" name="username" required placeholder="admin">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control rounded-3" id="password" name="password" required placeholder="••••••••">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="login" class="btn btn-dark btn-lg rounded-3 shadow-sm">Login Sekarang</button>
                    </div>
                </form>

                <div class="mt-4 text-center text-muted">
                    <hr>
                    <small>
                        Akses Percobaan:<br>
                        Username: <strong>admin</strong> | Password: <strong>akmal08</strong>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>