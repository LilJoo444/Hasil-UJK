<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style_buku1.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white mx-4" href="#">Toko Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active bg-warning rounded text-dark fw-semibold" aria-current="page"
                        href="input_buku.php">Form Input</a>
                    <a class="nav-link text-white fw-semibold mx-4" href="view_buku.php">Data Buku</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- FORM -->
    <div class="containers">
        <form class="row g-3" method="post" action="proses_buku.php">
            <h2 class="mb-4">Input Data Buku</h2>
            <div class="col-md-6">
                <label for="kodeBuku" class="form-label">Kode Buku</label>
                <input type="text" class="form-control" name="kode" id="kodeBuku" placeholder="Masukkan Kode Buku"
                    required>
            </div>
            <div class="col-md-6">
                <label for="judulBuku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul" id="judulBuku" placeholder="Masukkan Judul Buku"
                    required>
            </div>
            <div class="col-md-6">
                <label for="kategoriBuku" class="form-label">Kategori Buku</label>
                <select id="kategoriBuku" class="form-select" name="kategori" required>
                    <option value="" selected disabled>Pilih Kategori Buku</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Pendidikan">Pendidikan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="penerbitBuku" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" name="penerbit" id="penerbitBuku" placeholder="Masukkan Penerbit Buku" required>
            </div>
            <div class="col-md-6">
                <label for="hargaBuku" class="form-label">Harga Buku</label>
                <input type="number" class="form-control" name="harga" id="hargaBuku" placeholder="Masukkan Harga Buku"
                    required>
            </div>
            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-warning px-5 fw-bold">Simpan Buku</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>