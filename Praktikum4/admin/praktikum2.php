<?php
require_once 'navbar.html';
require_once 'sidebar.html';

?>

<div class="card m-3">
    <div class="card-header">
        <h1>Form Registrasi Pengguna</h1>
    </div>
    <div class="card-body">
        <form action="submit_get.php" method="GET">
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-4">
                    <input id="text1" name="nama_lengkap" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Username</label>
                <div class="col-4">
                    <input id="text2" name="username" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Password</label>
                <div class="col-4">
                    <input id="text3" name="password" type="password" class="form-control" required>
                </div>
            </div>
    </div>
    <div class="card-footer text-muted">
        <div class="form-group row">
            <div class="offset-4 col-7">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
        </form>
    </div>
</div>

<?php require_once 'footer.html'; ?>