<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.html");
}
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

include "tempalates/header.php";
include "tempalates/sidebar.php";

?>
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">tambah mahasiswa </h3>
                </div>
                <div class="col-sm-6">
                   
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">data prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="tambahaksimahasiswa.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" id="nim" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                               
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="telp">Telepon</label>
                                    <input type="text" name="telp" id="telp" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="row mb-3">
                                    <label for="foto" class="col-sm-2 col-form-label">apload foto</label>
                                    <div class="col-sm-10"></div>
                                    <input type="file" class= "form-control" id="foto" name="foto" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="prodi" class="form-label">Prodi</label>
                                    <select class="form-select" name="id_prodi" id="id_prodi">

                                    
                                        <?php foreach ($data as $d) : ?>
                                            <option value=<?php echo $d['id']; ?>><?php echo $d['nama']; ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <a label="index.php" class="btn btn-danger float-start"> kembali</a>
                                <button type="submit" class="btn btn-primary float-end"> simpan </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!--begin::Row-->
        <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<?php
include "tempalates/footer.php";
?>