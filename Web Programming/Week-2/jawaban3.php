<?php
    function time12format($jam) {
        return ($jam % 12) . ($jam >= 12 ? " PM" : " AM");
    }

    function greetings($jam) {
        if ($jam >= 4 && $jam < 12) {
            return "Selamat pagi";
        } elseif ($jam >= 12 && $jam < 16) {
            return "Selamat siang";
        } elseif ($jam >= 16 && $jam < 19) {
            return "Selamat sore";
        } else {
            return "Selamat malam";
        }
    }
?>

<!doctype html>
<html>
    <head>
        <title>PHP Week 2 - Solution 3</title>
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
            <div class="mt-3">Web Programming - Week 2 | Solution No. 3</div>
            <hr>
            <h1>Daftar Salam</h1>
            <table id="daftar" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Waktu 24 H</th>
                        <th>Waktu 12 H</th>
                        <th>Salam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 0; $i < 24; $i++) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>" . time12format($i) . "</td>";
                            echo "<td>" . greetings($i) . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Waktu 24 H</th>
                        <th>Waktu 12 H</th>
                        <th>Salam</th>
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