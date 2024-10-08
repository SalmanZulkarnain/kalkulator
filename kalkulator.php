<?php 

$bilangan_1 = $_GET['bilangan_1'];
$bilangan_2 = $_GET ['bilangan_2'];
$operator = $_GET['operator'];
$hasil = "";

    $tambah = $bilangan_1 + $bilangan_2;
    $kurang = $bilangan_1 - $bilangan_2;
    $kali = $bilangan_1 * $bilangan_2;
    $bagi = $bilangan_1 / $bilangan_2;

    if($operator == '+') {
        $hasil = $tambah;
    } elseif ($operator == '-') {
        $hasil = $kurang;
    } elseif ($operator == '*') {
        $hasil = $kali;
    } elseif ($operator == '/') {
        $hasil = $bagi;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>KALKULATOR</title>
        <link rel="stylesheet" href="kalkulator.css">
    </head>
    <body>
        <div class="cal-container">
            <div class="cal-title">
                KALKULATOR
            </div>
            <form action="" method="GET">
                <div>
                    <input type="number" name="bilangan_1" class="bilangan_1" required>
                </div>
                <div>
                    <input type="number" name="bilangan_2" class="bilangan_2" required>
                </div>
                    <select name="operator" class="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="submit" value="Hitung" class="hitung">
            </form>
            <div>
                <input type="text" value="<?php echo $hasil ?>" readonly class="hasil">
            </div>
        </div>
    </body>
</html>