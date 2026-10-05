<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="/simpan" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>