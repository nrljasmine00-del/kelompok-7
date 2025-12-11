<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = [];
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $jurusan = trim($_POST['jurusan']);
    
    if ($nama && $nim && $jurusan) {
        if (!isset($_SESSION['mahasiswa'][$nim])) {
            $_SESSION['mahasiswa'][$nim] = ['nama' => $nama, 'jurusan' => $jurusan];
            $message = 'Data mahasiswa berhasil ditambahkan!';
        } else {
            $message = 'NIM sudah ada!';
        }
    } else {
        $message = 'Semua field harus diisi!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;</style>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="tambah.php">Tambah Data</a> |
            <a href="lihat.php">Lihat Data</a> |
            <a href="hapus.php">Hapus Data</a>
        </nav>
        <p><?php echo $message; ?></p>
        <form method="post">
            <label>Nama: <input type="text" name="nama" required></label><br>
            <label>NIM: <input type="text" name="nim" required></label><br>
            <label>Jurusan: <input type="text" name="jurusan" required></label><br>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>