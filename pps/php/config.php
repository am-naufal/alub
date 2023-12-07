<?php
$dbhost ='localhost';
$dbuser ='u121228870_pps';
$dbpass ='ODv:V:^GbftL';
$dbname ='u121228870_db_pps';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
} catch (mysqli_sql_exception $e) {
  echo 'Koneksi gagal: ' . $e->getMessage();
}

/*css.plugin.hancon <?php echo $base; ?>*/
$base='https://lubabulhasanah.2020tiputri.com/pps';
/*control(link.redirect) <?php echo $basecon; ?>*/
$basead='https://lubabulhasanah.2020tiputri.com/pps/admin/';
/*kelas(link.redirect) <?php echo $basekel; ?>*/
$basegu='https://lubabulhasanah.2020tiputri.com/pps/guru/';
$basewa='https://lubabulhasanah.2020tiputri.com/pps/walimurid/';
?>