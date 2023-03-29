<?php
$baglanti=mysqli_connect("localhost","id20526921_myadmin","eK6afFqi","id20526921_berkaybuyukbas");

$name=$_POST["gelenisim"];
$no=$_POST["gelenno"];

$sorgu="INSERT INTO ogrenciler(isim,numara) values('{$name}','{$no}')";
$komut=mysqli_query($baglanti,$sorgu);
if($komut)
{
    echo "veri eklendi";
} 
else{
    echo "veri ekleme sırasında hata oluştu!";
}
msqli_close($baglanti);

?>
