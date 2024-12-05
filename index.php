<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEmbuat kalkulator sederhana dengan php</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
   <?php
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi']; 
        switch($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            }
    }
    ?>
    <div class="calculator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="bagi">/</option>
                <option value="kali">*</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="0" class="bil">
                <?php }?>
    </div>
</body>
</html>