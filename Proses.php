<?php
include 'Model.php';

//tabel nilai mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->insert($nim, $nama, $uts, $uas, $tugas);
    header('location:Nilai.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update($nim, $nama, $uts, $uas, $tugas);
    header('location:Nilai.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:Nilai.php');
}

//tabel data mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->insert($nim, $nama, $semester, $alamat, $no_telp, $email);
    header('location:Mahasiswa.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->update($nim, $nama, $semester, $alamat, $no_telp, $email);
    header('location:Mahasiswa.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:Mahasiswa.php');
}

//tabel absen mahasiswa
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert($nim, $nama, $matakuliah, $waktu_absen, $status);
    header('location:Absen.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert($nim, $nama, $matakuliah, $waktu_absen, $status);
    header('location:Absen.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:Absen.php');
}