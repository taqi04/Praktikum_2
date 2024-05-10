<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';
$query = "SELECT periksa.*, pasien.nama as nama_pasien, paramedik.nama as nama_paramedik 
FROM periksa 
INNER JOIN pasien ON periksa.pasien_id = pasien.id
INNER JOIN paramedik ON periksa.dokter_id = paramedik.id";
$periksas = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pemeriksaan Pasien | Puskesmas Jatijajar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pemeriksaan Pasien</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pemeriksaan Pasien</h3>

                            <div class="card-tools">

                                <div class="input-group input-group-sm" style="width: 100px;">
                                    <div class="input-group-append">

                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <a href="#" class="text-light"><i class="fas fa-plus"></i> Tambah</a>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>Tensi</th>
                                        <th>Keterangan</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Dokter</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($periksas as $periksa) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $periksa['tanggal']; ?></td>
                                            <td><?= $periksa['berat']; ?></td>
                                            <td><?= $periksa['tinggi']; ?></td>
                                            <td><?= $periksa['tensi']; ?></td>
                                            <td><?= $periksa['keterangan']; ?></td>
                                            <td><?= $periksa['nama_pasien']; ?></td>
                                            <td><?= $periksa['nama_paramedik']; ?></td>
                                            <td>
                                                <a href="form_periksa.php?id=<?= $periksa['id']; ?>" class="edit-form btn btn-warning btn-sm my-1"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="proses_periksa.php?idx=<?= $periksa['id']; ?>&proses_periksa=Hapus" class=" type-warning btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pemeriksaan Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing data -->
                        <!-- form start -->
                        <form method="POST" action="proses_periksa.php" id="register-form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Tanggal :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Enter Code ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Berat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="berat" id="berat" placeholder="Enter Wheight ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmp_lahir">Tinggi :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hospital-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="Enter Height ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tensi :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="tensi" id="tensi" placeholder="Enter Tensi ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Keterangan :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Enter Keterangan ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pasien_id">Nama Pasien :</label>
                                    <select class="form-control" id="pasien_id" name="pasien_id" required>
                                        <option value="">Pilih Pasien</option>
                                        <?php
                                        $sql = "SELECT * FROM pasien";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
                                        foreach ($result as $pass) {
                                            echo "<option value='$pass[id]'>$pass[nama]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dokter_id">Nama Dokter :</label>
                                    <select class="form-control" id="dokter_id" name="dokter_id" required>
                                        <option value="">Pilih Dokter</option>
                                        <?php
                                        $sql_dokter_id = "SELECT * FROM paramedik";
                                        $stmt_dokter_id = $dbh->prepare($sql_dokter_id);
                                        $stmt_dokter_id->execute();
                                        $result_dokter_id = $stmt_dokter_id->fetchAll();
                                        foreach ($result_dokter_id as $dokter_id) {
                                            $selected = (['id'] == $dokter_id['id']) ? 'selected' : '';
                                            echo "<option value='{$dokter_id['id']}' $selected>{$dokter_id['nama']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-location-dot"></i></span>
                                        </div>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Enter Address..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="proses_periksa" value="Simpan">
                                <input type="reset" class="btn btn-danger" name="proses" value="Batal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.html';
?>