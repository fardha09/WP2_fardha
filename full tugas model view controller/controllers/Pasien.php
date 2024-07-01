<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>
<body>
    <h1>Input Data Siswa</h1>
    <form action="process_form.php" method="POST">
        <label for="id">ID:</label><br>
        <input type="number" id="id" name="ID" ><br>

        <label for="nama">Nama Pasien:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="nis">NIS:</label><br>
        <input type="text" id="nis" name="nis"><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
        <label for="laki_laki">Laki-laki</label><br>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>

        <label for="poli">Poli:</label><br>
        <select id="poli" name="poli">
            <option value="">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>