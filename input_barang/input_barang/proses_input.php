<?php
include('tampil_data.php');
$koneksi = mysqli_connect("localhost", "root", "", "inventory");

// Periksa koneksi
if (mysqli_connect_error  ()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Tangkap data dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$nama_pemasok = $_POST['nama_pemasok'];

// Query untuk memasukkan data ke dalam database
$sql = "INSERT INTO barang (nama_barang, harga, stok, nama_pemasok) VALUES ('$nama_barang', '$harga', '$stok', '$nama_pemasok')";






mysqli_close($koneksi);
?>
