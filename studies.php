<?php
// 1. PROSES SIMPAN DATA BARU
if (isset($_POST['tambah'])) {
    $nama        = mysqli_real_escape_string($conn, $_POST['nama']);
    $id_level    = mysqli_real_escape_string($conn, $_POST['id_level']);
    $tahun_lulus = mysqli_real_escape_string($conn, $_POST['tahun_lulus']);

    $foto_name = $_FILES['foto']['name'];
    $foto_tmp  = $_FILES['foto']['tmp_name'];
    $foto_final = ""; 

    if (!empty($foto_name)) {
        $foto_ext   = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));
        $foto_final = "sekolah_" . date('Ymd_His') . "." . $foto_ext;
        
        // SINKRONISASI 1: Pastikan simpan ke folder 'Image' (I Kapital)
        move_uploaded_file($foto_tmp, "assets/Image/" . $foto_final);
    }

    $query = "INSERT INTO studies (nama, id_level, tahun_lulus, foto_sekolah) 
              VALUES ('$nama', '$id_level', '$tahun_lulus', '$foto_final')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambah!'); window.location.href='index.php?page=studies';</script>";
    }
}

// 2. QUERY TAMPIL DATA
$sql = mysqli_query($conn, "SELECT * FROM studies ORDER BY tahun_lulus DESC");
?>

<div class="mb-3 text-end">
    <button class="btn btn-dark btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="fa fa-plus me-1"></i> Tambah Riwayat
    </button>
</div>

<div class="card shadow-sm border-0 rounded-4 overflow-hidden">
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th class="ps-4">No</th>
                <th>Foto</th>
                <th>Instansi</th>
                <th>Tahun</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while($d = mysqli_fetch_array($sql)) : ?>
            <tr>
                <td class="ps-4"><?= $no++; ?></td>
               <td>
    <?php 
        // Ambil nama file dari DB
        $nama_file = trim($d['foto_sekolah']); // trim buat hapus spasi gak sengaja
        $path = "assets/img/" . $nama_file;
    ?>

    <?php if (!empty($nama_file) && file_exists($path)) : ?>
        <img src="<?= $path ?>?v=<?= time(); ?>" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
    <?php else : ?>
        <span class="badge bg-danger" style="font-size: 0.6rem;">Kosong/Salah: <?= $nama_file ?></span>
    <?php endif; ?>
</td>

<td><strong><?= $d['nama']; ?></strong></td> 
<td><?= $d['tahun_lulus']; ?></td> 
<td class="text-center">
    <a href="proses_hapus.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-danger border-0" onclick="return confirm('Yakin hapus?')">
        <i class="fa fa-trash"></i>
    </a>
</td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" enctype="multipart/form-data" class="modal-content border-0 shadow">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Tambah Pendidikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <div class="mb-3">
                    <label class="form-label">Nama Instansi</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">ID Level</label>
                    <input type="number" name="id_level" class="form-control" required placeholder="1=SD, 2=SMP, 3=SMA">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Sekolah (.jpg)</label>
                    <input type="file" name="foto" class="form-control" accept=".jpg,.jpeg">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="submit" name="tambah" class="btn btn-dark w-100 rounded-pill">Simpan Data</button>
            </div>
        </form>
    </div>
</div>