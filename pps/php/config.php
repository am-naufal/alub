<?php
$dbhost ='localhost';
$dbuser ='u121228870_lbh';
$dbpass ='Jv;:hlSMLS2';
$dbname ='u121228870_db_lbh';
// $dbhost ='localhost';
// $dbuser ='u121228870_pps';
// $dbpass ='ODv:V:^GbftL';
// $dbname ='u121228870_db_pps';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // var_dump($con);
  // exit;
} catch (mysqli_sql_exception $e) {
  echo 'Koneksi gagal: ' . $e->getMessage();
}
/*css.plugin.hancon <?php echo $base; ?>*/
// $base='http://localhost/alub/pps/';
/*control(link.redirect) <?php echo $basecon; ?>*/
// $basead='http://localhost/alub/pps/admin/';
/*kelas(link.redirect) <?php echo $basekel; ?>*/
// $basegu='http://localhost/alub/pps/guru/';
// $basewa='http://localhost/alub/pps/walimurid/';

 $base='https://2020tiputri.com/lubabulhasanah/pps/';
 $basead='https://2020tiputri.com/lubabulhasanah/pps/admin/'; 
 /*kelas(link.redirect) <?php echo $basekel; ?>*/
$basegu='https://2020tiputri.com/lubabulhasanah/pps/guru/';
$basewa='https://2020tiputri.com/lubabulhasanah/pps/walimurid/';
/*control(link.redirect) <?php// echo $basecon; ?>*/
?>