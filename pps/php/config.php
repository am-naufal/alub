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
 $base='https://lubabulhasanah.2020tiputri.com/pps/';
 $basead='https://lubabulhasanah.2020tiputri.com/pps/admin/'; 
 /*kelas(link.redirect) <?php echo $basekel; ?>*/
$basegu='https://lubabulhasanah.2020tiputri.com/pps/guru/';
$basewa='https://lubabulhasanah.2020tiputri.com/pps/walimurid/';
/*control(link.redirect) <?php// echo $basecon; ?>*/
?>