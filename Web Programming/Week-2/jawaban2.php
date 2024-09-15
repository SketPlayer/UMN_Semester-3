<?php
$data = array(
            "1" => array(
                        "perusahaan" => "PT. Maju Terus Pantang Mundur",
                        "kota" => "Jakarta",
                        "posisi" => "General Manager",
                        "gaji" => "20.000.000"
                    ),
            "2" => array(
                        "perusahaan" => "CV. Jaya Abadi Selamanya",
                        "kota" => "Bandung",
                        "posisi" => "Cleaning Service",
                        "gaji" => "50.000.000"
                    ),
            "3" => array(
                        "perusahaan" => "PT. Mars Serpong Damai",
                        "kota" => "Denpasar",
                        "posisi" => "Marketing Manager",
                        "gaji" => "100.000.000"
                    ),
            "4" => array(
                        "perusahaan" => "PT. Happy Birthday To You",
                        "kota" => "Palembang",
                        "posisi" => "Badut",
                        "gaji" => "500.000.000"
                    ),
            "5" => array(
                        "perusahaan" => "CV. Avengers Nusantara",
                        "kota" => "Lampung",
                        "posisi" => "Security",
                        "gaji" => "25.000.000"
                    ),
            "6" => array(
                        "perusahaan" => "Toko Tajir Mampus",
                        "kota" => "Jakarta",
                        "posisi" => "Kasir",
                        "gaji" => "100.000.000.000"
                    ),
            "7" => array(
                        "perusahaan" => "Universitas Keren Banget",
                        "kota" => "Tangerang",
                        "posisi" => "Dosen",
                        "gaji" => "100.000.000"
                    ),
            "8" => array(
                        "perusahaan" => "Restauran Amigos - Agak Minggir Got Sedikit",
                        "kota" => "Surabaya",
                        "posisi" => "Koki",
                        "gaji" => "900.000.000"
                    ),
            "9" => array(
                        "perusahaan" => "Bengkel Mobil Listrik Konslet",
                        "kota" => "Jayapura",
                        "posisi" => "Mekanik",
                        "gaji" => "300.000.000"
                    ),
            "10" => array(
                        "perusahaan" => "PT. Langit ke 7",
                        "kota" => "Manado",
                        "posisi" => "Pilot",
                        "gaji" => "150.000.000"
                    ),
            "11" => array(
                        "perusahaan" => "PT. Mencari Cinta Sejati",
                        "kota" => "Lubuklinggau",
                        "posisi" => "Konsultan",
                        "gaji" => "75.000.000"
                    ),
            "12" => array(
                        "perusahaan" => "Rumah Sakit Jiwa Dr.Tirta",
                        "kota" => "Semarang",
                        "posisi" => "Psikolog",
                        "gaji" => "200.000.000"
                    ),
            "13" => array(
                        "perusahaan" => "PT. Bumi Langit",
                        "kota" => "Medan",
                        "posisi" => "Marketing Manager",
                        "gaji" => "150.000.000"
                    ),
            "14" => array(
                        "perusahaan" => "PT. Bulan Bintang",
                        "kota" => "Batam",
                        "posisi" => "Cleaning Service",
                        "gaji" => "55.000.000"
                    ),
            "15" => array(
                        "perusahaan" => "PT. Hogwarts",
                        "kota" => "Yogyakarta",
                        "posisi" => "Penyihir",
                        "gaji" => "200.000.000"
                    ),
            "16" => array(
                        "perusahaan" => "Toko Mantap Tujuh Keturunan",
                        "kota" => "Jakarta",
                        "posisi" => "Security",
                        "gaji" => "30.000.000"
                    ),
            "17" => array(
                        "perusahaan" => "CV. Desa Konoha",
                        "kota" => "Jakarta",
                        "posisi" => "Cleaning Service",
                        "gaji" => "50.000.000"
                    ),
    );

?>

<!doctype html>
<html>
    <head>
        <title>PHP Week 2 - Solution 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="mt-3">Web Programming - Week 2 | Solution No. 2</div>
            <hr>
            <h1>Daftar Lowongan Pekerjaan</h1>
            <table id="daftar" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Perusahaan</th>
                        <th>Kota</th>
                        <th>Posisi</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $num => $row) {
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td>{$row['perusahaan']}</td>";
                            echo "<td>{$row['kota']}</td>";
                            echo "<td>{$row['posisi']}</td>";
                            echo "<td>{$row['gaji']}</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Perusahaan</th>
                        <th>Kota</th>
                        <th>Posisi</th>
                        <th>Gaji</th>
                    </tr>
                </tfoot>
            </table>
            </br>
        </div>

        <script>
            new DataTable('#daftar');
        </script>
        
    </body>
</html>