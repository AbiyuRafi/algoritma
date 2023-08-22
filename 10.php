<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data waktu tambah 1 detik</title>
</head>

<body>

    <form method="POST" action="">
        <table>
        <tr>
            <td>Input Jam</td>
            <td><input type="number" name="hh"></td>
        </tr>
        <tr>
            <td>Input Menit</td>
            <td><input type="number" name="mm"></td>
        </tr>
        <tr>
            <td>Input detik</td>
            <td><input type="number" name="ss"></td>
        </tr>
            <td><input type="submit" value="Submit" name="submit"></td>
            </table>

            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['hh'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];

                $ss = $ss + 1;

                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 00;

                    if ($mm >= 60) {
                        $hh = $hh + 1;
                        $mm = 00;
                        $ss = 00;

                        if ($hh >= 24) {
                            $hh = 00;
                            $mm = 00;
                            $ss = 00;
                        }
                    }
                } else {
                    $ss = $ss;
                }

                echo $hh . ":";
                echo $mm . ":";
                echo $ss ;
            }

            ?>

</body>

</html>