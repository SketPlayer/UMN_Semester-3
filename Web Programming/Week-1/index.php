<?php
require("data.php");
?>
<!doctype html>
<html>
    <head>
        <title>Hello World</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
              rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <?php require("navbar.php"); ?>
            <div class="card m-2">
                <div class="card-body">
                    Hello my name is <?php echo $nama ?>
                </div>
            </div>
        </div>
    </body>
</html>