<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Form</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="proses_post.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama" />
        <br />
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="m" /> Laki-Laki
        <input type="radio" name="gender" value="f" /> Perempuan
        <br />
        <label>Tempat Lahir</label>
        <input type="text" name="tempat" />
        <br />
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal" />
        <br />
        <label>Email</label>
        <input type="email" name="email" />
        <br />
        <label>Alamat</label>
        <textarea rows="4" autofocus name="alamat"></textarea>
        <br />
        <label>Program Studi</label>
        <select name="prodi">
            <option value="if">Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="tk"> Teknik Komputer</option>
        </select>
        <br />
        <label>Hobi</label>
            <input type="checkbox" name="makan" />
            <label>Makan</label>
            <input type="checkbox" name="minum" />
            <label>Minum</label>
            <input type="checkbox" name="tidur" />
            <label>Tidur</label>
        <br />
        <button type="submit">Kirim</button>
    </form>
</body>
</html>