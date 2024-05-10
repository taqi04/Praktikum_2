<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once "proses_registrasi.php";

?>
<div class="container">
    <h2>Form Registrasi</h2>
    <form method="POST">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input id="name" name="name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required">
                    <label for="gender_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required">
                    <label for="gender_1" class="custom-control-label">Wanita</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php foreach ($domisili as $dom) { ?>
                        <option value="<?= $dom ?>"><?= $dom ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="program_studi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select" required="required">
                    <?php foreach ($program_studi as $key => $value) { ?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web & Programming</label>
            <div class="col-8">
                <div>
                    <?php foreach ($skills as $key => $value) { ?>
                        <input name="skills[]" type="checkbox" value="<?= $key ?>">
                        <label for="skills_<?= $key ?>"><?= $key ?></label>
                    <?php } ?>
                </div>

            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    $totalSkillLevel = 0;
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $domisili = $_POST['domisili'];
        $program_studi = $_POST['program_studi'];
        $_skill_pilihan = $_POST['skills'];
        $email = $_POST['email'];

    ?>


        <table class="table table-bordered-striped">
            <tr class="table-primary">
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Domisili</th>
                <th>Program Studi</th>
                <th>Skill Programming</th>
                <th>Predikat</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?= $nim; ?></td>
                <td><?= $name; ?></td>
                <td><?= $gender; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $program_studi; ?></td>
                <td>
                    <?php
                    function hitungSkor($selectedSkills, $skills)
                    {
                        $total = 0;
                        foreach ($selectedSkills as $selectedSkill) {
                            if (isset($skills[$selectedSkill])) {
                                $total += $skills[$selectedSkill];
                            }
                        }
                        return $total;
                    }

                    $skor = hitungSkor($_skill_pilihan, $skills);
                    echo $skor;


                    ?>

                </td>
                <td>
                    <?php
                    function predikat($skor)
                    {
                        if ($skor == 0) {
                            return "Tidak Memadai";
                        } elseif ($skor <= 40) {
                            return "Kurang";
                        } elseif ($skor <= 60) {
                            return "Cukup";
                        } elseif ($skor <= 100) {
                            return "Baik";
                        } elseif ($skor <= 150) {
                            return "Sangat Baik";
                        } else {
                            return "Tidak Memadai";
                        }
                    }

                    $skor = hitungSkor($_skill_pilihan, $skills);
                    $predikat = predikat($skor);

                    echo $predikat;
                    ?>
                </td>
                <td><?= $email; ?></td>
            </tr>
        </table>

    <?php  } ?>
</div>

<?php require_once 'footer.html'; ?>