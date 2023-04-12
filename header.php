<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan Modularisasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body>
    <div id="container">
        <div>
            <h4 class="py-2 px-3" style="background-color: #667fa0; color: white;">
                </svg> Praktikum 4 </h4>
        </div>
        <nav>
            <a href="home.php" class="btn btn-primary">Home</a>
            <a href="about.php" class="btn btn-primary">About</a>
            <a href="tambah.php" class="btn btn-primary">Tambah Barang</a>
        </nav>