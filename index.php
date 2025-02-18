<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day 1</title>
</head>
<body>
test <br>
<?php
$walkes = "Bu Yuniar";
//echo "wali kelas = ", $walkes;
echo "wali kelas = $walkes";
$angka1 = 5;
$angka2 = 10;
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;

// sebaris
# ini juga sebaris
/*
    nah yang ini
    multi line
    berapapun baris tetap
    komen
*/
?>

<div>
    <?php
    echo "$angka1 + $angka2 = $penjumlahan"
//    echo $angka1 . ' + ' . $angka2 . ' = ' . $penjumlahan;
    ?>
</div>

<div>
    <?php
//    echo $x." = ". $angka1 . ' x ' . $angka2;
    echo "$x = $angka1 x $angka2"
    ?>
</div>

<div>
    <?php
    echo $angka1 ** $angka2;
    echo "$angka1 <sup>$angka2</sup> = ";
    echo number_format(pow($angka1,$angka2), 0, "", '.');
    ?>
</div>

<div>
    <?php
    echo "$angka2 <sup>$angka1</sup> = ";
    echo pow($angka2,$angka1);
    ?>
</div>

<div>
    <?php
    echo number_format(pow($angka2, $angka1), 2, ",", ".");
    ?>
</div>
</body>
</html>