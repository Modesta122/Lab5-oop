<?php require('header.php'); ?>
<br>
<div class="content text-center">
        <h2>Ini Halaman Home</h2>
        <p>Ini adalah bagian content dari halaman.</p>
</div>
<div class="container">
        <h4 class="mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-basket2"
                        viewBox="0 0 16 16">
                        <path
                                d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z" />
                        <path
                                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z" />
                </svg> Data Barang
        </h4>

        <table class="table table-sm table-bordered">
                <tr class="text-center fw-bold table-info text-uppercase">
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Nama</td>
                        <td>Kategori</td>
                        <td>Harga Beli</td>
                        <td>Harga Jual</td>
                        <td>Stok</td>
                        <td>Aksi</td>
                </tr>
                <?php
                if ($result->num_rows > 0) {

                        // die(); 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) {
                                // var_dump($data['nama_barang']); 
                                ?>
                                <tr>
                                        <td class="text-center">
                                                <?= $no++ ?>
                                        </td>
                                        <td class="text-center">
                                                <img src="gambar/<?= $data['gambar_barang'] ?>" alt="<?= $data['nama_barang'] ?>"
                                                        width="100px">
                                        </td>
                                        <td>
                                                <?= $data['nama'] ?>
                                        </td>
                                        <td>
                                                <?= $data['kategori'] ?>
                                        </td>
                                        <td>
                                                Rp.
                                                <?= $data['harga_beli'] ?>
                                        </td>
                                        <td>
                                                Rp.
                                                <?= $data['harga_jual'] ?>
                                        </td>
                                        <td>
                                                <?= $data['stok'] ?>
                                        </td>
                                        <td class="text-center">
                                                <a href="ubah.php?id_barang=<?= $data['id_barang'] ?>"
                                                        class="btn btn-warning btn-sm mx-1">Edit</a>
                                                <a href="proses.php?id_barang=<?= $data['id_barang'] ?>&aksi=hapus"
                                                        class="btn btn-danger btn-sm mx-1">Delete</a>
                                        </td>
                                </tr>
                                <?php
                        }
                } else {
                        ?>
                        <tr>
                                <td colspan="8" class="text-center">Data Kosong</td>
                        </tr>
                        <?php
                }
                ?>
        </table>
</div>
<?php require('footer.php'); ?>