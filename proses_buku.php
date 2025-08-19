<?php

define('FILE_JSON', 'data_buku.json');

function cekFileJson()
{
    if (!file_exists(FILE_JSON)) {
    
        file_put_contents(FILE_JSON, json_encode([]));
    }
}

function bacaDataJson()
{
    return json_decode(file_get_contents(FILE_JSON), true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    cekFileJson();

    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    $data_buku = bacaDataJson();

    for ($i = 0; $i < count($data_buku); $i++) {
        if ($data_buku[$i]['kode_b'] == $kode) {

            echo "<script>alert('Buku dengan Kode: $kode sudah ada!');</script>";
            echo "<script>window.location.href='input_buku.php';</script>";
            exit();
        }
    }

    $data_buku[] = [
        'kode_b' => $kode,
        'judul_b' => $judul,
        'kategori_b' => $kategori,
        'penerbit_b' => $penerbit,
        'harga_b' => $harga
    ];

    file_put_contents(FILE_JSON, json_encode($data_buku, JSON_PRETTY_PRINT));

    echo "<script>alert('Data berhasil ditambahkan!');</script>";
    echo "<script>window.location.href='input_buku.php';</script>";
}
?>