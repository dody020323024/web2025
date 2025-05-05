<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.html");
}
include "koneksi.php";

$query = "SELECT m.*, p.nama prodi FROM `mahasiswa` m JOIN prodi p ON m.id_prodi = p.id";
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
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
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
                            <h3 class="card-title">Data mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>No Telp</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email</th>
                                        <th>prodi</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $d["nim"]; ?></td>
                                            <td><?php echo $d["nama"]; ?></td>
                                            <td><?php echo $d["telp"]; ?></td>
                                            <td><?php echo $d["tanggallahir"]; ?></td>
                                            <td><?php echo $d["email"]; ?></td>
                                            <td><?php echo $d["prodi"]; ?></td>

                                            <td>
                                                <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>" class="btn btn-warning">edit </a>
                                                <a href="hapusmahasiswa.php?nim=<?= $d['nim']; ?>" class="btn btn-danger"
                                                    onclick="return confirm('bujur jue kah ikam neh hendak mehepos?')">hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tr>

                                </tbody>
                            </table>
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