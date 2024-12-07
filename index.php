<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portal_berita";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita</title>
</head>
<body>
    <h1>Daftar Berita</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row['judul'] . "</h2>";
            echo "<p>" . $row['konten'] . "</p>";
            echo "<small>" . $row['tanggal'] . "</small><hr>";
        }
    } else {
        echo "Tidak ada berita.";
    }

    $conn->close();
    ?>
</body>
</html>
