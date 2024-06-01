<?php
session_start();
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    $sorgu = $baglan->query("SELECT * FROM kullanici WHERE kullanici='$kullanici' AND sifre='$sifre'");
    $kayitsay = $sorgu->num_rows;

    if ($kayitsay > 0) {
        // Cookie oluşturma
        setcookie("kullanici", $kullanici, time() + 3600); // 3600 saniye (1 saat)
    
        // Session oluşturma
        $_SESSION["giris"] = sha1(md5("var"));
    
        echo "
        <script>
            alert('Giriş Başarılı');
            window.location.href = 'anasayfa.php';
        </script>";
    } else {
        echo "
        <script>
            alert('HATALI KULLANICI BİLGİSİ');
            window.location.href = 'admin.php';
        </script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim İndex</title>
</head>
<body>
<form action="" method="post">
        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="kullanici" size="30" required><br><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" size="30" required><br><br><br>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>
