<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>
    <h1>Tambah Berita</h1>
    <form action="tambah_berita.php" method="POST">
        <label>Judul Berita:</label>
        <input type="text" name="judul" required><br><br>

        <label>Konten:</label>
        <textarea name="konten" required></textarea><br><br>

        <button type="submit">Tambah Berita</button>
    </form>
</body>
</html>
