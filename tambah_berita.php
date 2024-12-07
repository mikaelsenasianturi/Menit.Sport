<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal_berita";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    // Query untuk menyimpan berita ke database
    $sql = "INSERT INTO berita (judul, konten) VALUES ('$judul', '$konten')";
    if ($conn->query($sql) === TRUE) {
        echo "Berita berhasil ditambahkan! <a href='index.php'>Kembali ke beranda</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
