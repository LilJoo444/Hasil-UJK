<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/style_buku2.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white mx-4" href="#">Toko Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-white fw-semibold" href="input_buku.php">Form Input</a>
                    <a class="nav-link active bg-warning rounded text-dark fw-semibold mx-4" href="view_buku.php">Data
                        Buku</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <h1 class="mb-4">Daftar Data Buku</h1>

        <?php
        define('FILE_JSON', 'data_buku.json');

        function cekFileJson()
        {
            if (!file_exists(FILE_JSON)) {
                file_put_contents(FILE_JSON, json_encode([]));
            }
            $json = file_get_contents(FILE_JSON);

            return json_decode($json, true);
        }

        $data_buku = cekFileJson();

        $total_data = count($data_buku);

        if ($total_data == 0) {
            echo "<div class='alert alert-info'>Belum ada data buku.</div>";
        } else {
            echo "<table class='table table-bordered table-striped'>
                    <thead class='table-primary'>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>";

            for ($i = 0; $i < $total_data; $i++) {

                $buku = $data_buku[$i];

                echo "<tr>
                        <td>" . htmlspecialchars($buku['kode_b']) . "</td>
                        <td>" . htmlspecialchars($buku['judul_b']) . "</td>
                        <td>" . htmlspecialchars($buku['kategori_b']) . "</td>
                        <td>" . htmlspecialchars($buku['penerbit_b']) . "</td>
                        <td>" . htmlspecialchars($buku['harga_b']) . "</td>
                    </tr>";
            }
            echo "</tbody></table>";
        }
        ?>
    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>