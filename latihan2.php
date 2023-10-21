<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title> Latihan 1 PHP - Nafila Alfirahma Asmaranto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #e0ffff">
    <h1> Selamat Datang </h1>
    <hr/>
    <br/>
    <form>
    <h3> Pendataan Singkat Mahasiswa SI</h3>
    <div class="mb-3">
        <label for="inputNama" class="form-label">Nama Lengkap</label>
        <input type="nama" class="form-control" id="inputNama">
    </div>
    <div class="mb-3">
        <label for="Input Usia" class="form-label">Usia</label>
        <input type="age" class="form-control" id="Input Usia">
        <div id="Input Usia" class="form-text">Tolong inputkan angka saja</div>
    </div>
    </form>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pilih Angkatan
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">2017</a></li>
        <li><a class="dropdown-item" href="#">2018</a></li>
        <li><a class="dropdown-item" href="#">2019</a></li>
        <li><a class="dropdown-item" href="#">2021</a></li>
        <li><a class="dropdown-item" href="#">2022</a></li>
        <li><a class="dropdown-item" href="#">2023</a></li>
    </ul>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit (Hitung)</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>