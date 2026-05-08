<?php
// Cek jika ada aksi POST (Tambah/Edit/Hapus)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        mysqli_query($conn, "INSERT INTO level (nama) VALUES ('$nama')");
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        mysqli_query($conn, "UPDATE level SET nama='$nama' WHERE id='$id'");
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        mysqli_query($conn, "DELETE FROM level WHERE id='$id'");
    }
    echo "<script>window.location.href='index.php?page=level';</script>";
}

$query = mysqli_query($conn, "SELECT * FROM level ORDER BY id ASC");
?>

<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold"><i class="fa fa-layer-group me-2"></i>Data Level Pendidikan</h5>
        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addLevelModal">
            <i class="fa fa-plus me-1"></i> Tambah Level
        </button>
    </div>
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th width="10%">ID</th>
                    <th>Nama Level</th>
                    <th width="20%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-warning me-1" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $row['id'] ?>">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <form method="POST" class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Level</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <div class="mb-3">
                                    <label class="form-label">Nama Level</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="edit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Delete -->
                <div class="modal fade" id="deleteModal<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <form method="POST" class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus level <strong><?= $row['nama'] ?></strong>?</p>
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="delete" class="btn btn-danger">Hapus Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="addLevelModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Level Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Level</label>
                    <input type="text" name="nama" class="form-control" placeholder="Contoh: Sarjana (S1)" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="add" class="btn btn-dark">Simpan</button>
            </div>
        </form>
    </div>
</div>