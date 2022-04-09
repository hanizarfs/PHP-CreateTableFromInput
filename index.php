<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table - PHP</title>

    <!-- CSS -->
    <style>
        body {
            height: 100%;
            padding: 5em 0 0 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .genap {
            background-color: black;
            color: white;
        }

        .ganjil {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="text-center py-3">Table with PHP</h1>
            <div class="card-header p-5">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="row" class="form-label">Row</label>
                        <input type="number" class="form-control" name="row">
                    </div>
                    <div class="mb-3">
                        <label for="column" class="form-label">Column</label>
                        <input type="number" class="form-control" name="column">
                    </div>
                    <button type="submit" class="btn btn-primary float-end" name="submit">Submit</button>
                </form>
            </div>
            <div class="card-body mt-3 p-5">
                <?php
    if(isset($_POST['submit'])) {
        $awal = microtime(true);
        function buatKotak($baris, $kolom) {
            
            // Inisialisasi counter
            $num = 1;

            echo "<table border='1' class='table-responsive w-100'>";
            for($i=1; $i<=$baris; $i++) {

            // Membuat baris
            echo "<tr>";
            for($j=1; $j<=$kolom; $j++) {

                // Membuat kolom
                if ($num%2 == 0) {
                    $style = 'genap';
                }
                else {
                    $style = 'ganjil';
                }
            echo "<td class='$style'>";
            echo $num;
            echo "</td>";
            $num++;
            }
            echo "</tr>";
            }
            echo "</table>";
        }
    buatKotak($_POST['row'],$_POST['column']);
    $akhir = microtime(true);
    $lama = $akhir - $awal;
        echo "<p>Lama eksekusi script adalah: ".$lama." detik</p>";
    }
    ?>
            </div>
        </div>
    </div>

    <!-- BUNDLE BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>