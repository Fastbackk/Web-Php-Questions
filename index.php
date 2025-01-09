<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASD</title>
</head>

<body>
    <form action="" method="POST">
        <label for="tahmin">Tahmininizi giriniz</label>
        <input type="number" name="tahmin" id="tahmin">
        <button type="submit">Tahmin et</button>
    </form>
    <?php
    //beyler bu kod dosyayı bulma kodu.
    $dosyaninYolu = getenv("HOMEDRIVE") . getenv("HOMEPATH") . "\\Desktop\\sinav.txt";
    //beyler bu kod da contenti(sayıyı  yani) çekme kodu
    if (file_exists($dosyaninYolu)) {
        $dosyaSayi = (int)file_get_contents($dosyaninYolu);

        //formdan gelen tahmin değerini çekelim bakem
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $tahmin = (int)$_POST['tahmin'];

            //kontrol edelim
            if ($tahmin < $dosyaSayi) {
                echo "<p>Daha büyük bir değer giriniz.</p>";
            } elseif ($tahmin > $dosyaSayi) {
                echo "<p>Daha küçük bir değer giriniz.</p>";
            } else {
                echo "<p>Tebrikler! Doğru tahmin ettiniz. Sayı: $dosyaSayi</p>";
            }
        }
    } else {
        echo "DOSYAYA ERİŞİLEMEDİ!";
    }
    //Görülmemiş kahramanlık Bedir günü, küffârın sancaktarıyken Umeyr,Esir edildiğinde, çok üzüldü kâfirler.
    // Ebû Cehil, Kureyş’e vermek için cesaret,Şiirler söylüyor ve ediyordu çok gayret.
    // (İşte bu günler için doğurdu beni anam!)Diyerek, gençler...
    ?>
</body>

</html>