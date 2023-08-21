<?php

if (isset($_POST['submit'])) {
    $suhu_celcius = $_POST['suhu_celcius'];
    $suhu_fanherit;

    $suhu_fanherit = $suhu_celcius / 33.8;

    if ($suhu_celcius > 300) {
        echo "buakarr";
    } elseif ($suhu_celcius > 250) {
        echo "tirizz";
    } else {
        echo "normal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>suhu</td>
                <td><input type="text" name="suhu_celcius" id="suhu"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit">
            </tr>
        </table>
    </form>


</body>

</html>