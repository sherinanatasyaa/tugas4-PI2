<?php
include 'Model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Index.php">Pemograman Internet 2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="Mahasiswa.php">Mahasiswa</a></li>
                <li><a href="Nilai.php">Nilai</a></li>
                <li><a href="Absen.php">Absen</a></li>
            </ul>
        </div>
</nav>

<h1>Data Mahasiswa</h1>
        <a href="CreateMhs.php">Tambah Data</a>
        <br>
        <a href="PrintMhs.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_datamhs();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nim ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->semester ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->no_telp ?></td>
                            <td><?= $data->email ?></td>
                            <td>
                                <a name="edit" id="edit" href="EditMhs.php?nim=<?= $data->nim ?>">Edit</a>
                                <a name="hapus" id="hapus" href="Proses.php?nim=<?= $data->nim ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="9">Belum Ada Data Pada Tabel Mahasiswa.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html> 