<?php
echo "<h1>Form Sarjana</h1><br />";
echo '<form action="proses.php" method="post">
        <input type="hidden" name="form_type" value="sarjana">
        <label>NIM</label>
        <input type="text" name="nim" />
        <br />
        <label>Nama</label>
        <input type="text" name="nama" />
        <br />
        <label>Prodi</label>
        <input type="text" name="prodi" />
        <br />
        <button type="submit">Submit</button>
        </form>';

?>