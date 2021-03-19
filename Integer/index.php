<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer</title>
</head>

<body>
    <form action="index.php" method="POST">
        Masukkan Nilai : <input type="number" name="angka">
        <input type="submit" value="Submit">
    </form>

    <?php

    $angka = $_POST['angka'];

    if ($angka >= 60 && $angka <= 80) {
        echo "Memuaskan";
    } elseif ($angka > 80 && $angka <= 90) {
        echo "Sangat Memuaskan";
    } elseif ($angka > 90 && $angka <= 100) {
        echo "Terpuji";
    } elseif ($angka < 60) {
        echo "Tidak Lulus";
    } else {
        echo "Nilai Tidak Valid";
    }

    ?>
</body>

</html>