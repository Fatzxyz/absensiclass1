<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$kelas  = $_POST['kelas'];
$status = $_POST['status'];
$tanggal = date("Y-m-d");

$sql = "INSERT INTO absensi (nama, kelas, tanggal, status) VALUES ('$nama','$kelas','$tanggal','$status')";
if(mysqli_query($koneksi, $sql)){
    header("Location: data.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
