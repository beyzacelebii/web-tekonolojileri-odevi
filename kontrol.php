<html>
<head>
<link rel="stylesheet" href="stil.css">
</head>
<body>

<?php

$kullanıcı_ad=$_POST['kullanıcı_ad'];
$şifre=$_POST['şifre'];
if($kullanıcı_ad=="G191210009@sakarya.edu.tr" && $şifre==123 )
{ 
    echo "HOŞGELDİNİZ G191210009" ;
}
else {
  echo "HATALI GİRİŞ";
 echo " <br>  <br> <br>";
header ("refresh:5; url=login.html");

die("5 Saniye içerisinde login sayfaya yönlendirileceksiniz lütefen doğru giriş yapınız.");
}

?>

</body>
</html>
