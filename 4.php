<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <tr>
            <td>Waktu</td>
            <td><input type="text" name="totalDetik"></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $totalDetik = ($_POST['totalDetik']);

    $jam = floor($totalDetik / 3600);
    $sisaDetik = $totalDetik % 3600;
    $menit = floor($sisaDetik / 60);
    $detik = $sisaDetik % 60;

    $output = "";
    if ($jam > 0) {
        $output .= $jam . " jam ";
    }
    if ($menit > 0) {
        $output .= $menit . " menit ";
    }
    $output .= $detik . " detik";

    echo "Total detik $totalDetik menjadi: $output";
}
?>