<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #adb5bd;
    font-family: Arial, sans-serif;
    color: black;
}

.box {
    width: 90%;
    max-width: 400px; /* Batas lebar maksimum */
    padding: 20px;
    background-color: rgba(255, 255, 250, 0.2);
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    margin: auto;
}

table {
    width: 100%;
    margin-top: 20px;
}

td {
    padding: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: rgba(255, 255, 255, 0.1);
    color: black;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #c0392b;
}

.output {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    padding: 10px;
    margin-top: 20px;
}

</style>

<body>
    <div class="box">
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Input Jam</td>
                    <td><input type="number" name="hh" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td>Input Menit</td>
                    <td><input type="number" name="mm" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td>Input detik</td>
                    <td><input type="number" name="ss" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
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
                echo $ss;
            }

            ?>
        </form>
    </div>



</body>

</html>