<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: 80%;
    max-width: 600px;
}

h1 {
    text-align: center;
    color: #333;
}

nav {
    text-align: center;
    margin-bottom: 20px;
}

nav a {
    margin: 0 10px;
    text-decoration: none;
    color: #007bff;
}

nav a:hover {
    text-decoration: underline;
}


}</style>
    <div class="container">
        <h1>Aplikasi Pendataan Mahasiswa</h1>
        <nav>
            <a href="tambah.php">Tambah Data</a> |
            <a href="lihat.php">Lihat Data</a> |
            <a href="hapus.php">Hapus Data</a>
        </nav>
        <p>Pilih menu di atas untuk mengelola data mahasiswa.</p>
    </div>
</body>
</html>


