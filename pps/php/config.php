<?php
$dbhost ='';
$dbuser ='u121228870_pps';
$dbpass ='ODv:V:^GbftL';
$dbname ='u121228870_db_pps';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $db = new PDO($db_dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo 'Connection failed: '.$e->getMessage();
}
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
/*css.plugin.hancon <?php echo $base; ?>*/
$base='https://lubabulhasanah.2020tiputri.com/pps';
/*control(link.redirect) <?php echo $basecon; ?>*/
$basead='https://lubabulhasanah.2020tiputri.com/pps/admin/';
/*kelas(link.redirect) <?php echo $basekel; ?>*/
$basegu='https://lubabulhasanah.2020tiputri.com/pps/guru/';
$basewa='https://lubabulhasanah.2020tiputri.com/pps/walimurid/';
?>