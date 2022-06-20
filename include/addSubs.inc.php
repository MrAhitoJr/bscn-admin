<?php 
 session_start();

 if(isset($_SESSION['code']) && isset($_POST['submit'])){
print_r($_POST);
// Personal Info
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$addr = $_POST['addr'];
$brgy = $_POST['brgy'];
$mun = $_POST['mun'];
$cnum = $_POST['cnum'];
$subs = $_POST['subs'];
$install = $_POST['install'];
$lineman = $_POST['lineman'];
$wr_type = $_POST['wr_type'];
$wrStr = $_POST['wrStr'];
$wrEnd = $_POST['wrEnd'];
$ip='';
$mac='';
$serial='';
$nap='';
$slot='';
$layer='';
$lcp='';
$olt='';
$gpon='';
$card='';
$box='';

if($install=='catv' || $install=='fbr_catv') {
$card=$_POST['cardn'];
$box=$_POST['boxn'];;
}
if($install=='netonly' || $install=='fbr_netonly') {
$ip= $_POST['ip'];
$mac= $_POST['mac'];
$serial= $_POST['serial'];
$nap= $_POST['nap'];
$slot= $_POST['slot'];
$layer= $_POST['layer'];
$lcp= $_POST['lcp'];
$olt= $_POST['olt'];
$gpon= $_POST['gpon'];
}
if($install=='catvnet' || $install=='fbr_catvnet') {
    $ip= $_POST['ip'];
    $mac= $_POST['mac'];
    $serial= $_POST['serial'];
    $nap= $_POST['nap'];
    $slot= $_POST['slot'];
    $layer= $_POST['layer'];
    $lcp= $_POST['lcp'];
    $olt= $_POST['olt'];
    $gpon= $_POST['gpon'];
    $card=$_POST['cardn'];
    $box=$_POST['boxn'];;
}





echo
"<br/>lname: ".$lname.
"<br/>fname: ".$fname.
"<br/>mname: ".$mname.
"<br/>addr: ".$addr.
"<br/>brgy: ".$brgy.
"<br/>mun: ".$mun.
"<br/>cnum: ".$cnum.
"<br/>subs: ".$subs.
"<br/>install: ".$install.
"<br/>lineman: ".$lineman.
"<br/>wr_type: ".$wr_type.
"<br/>wrStr: ".$wrStr.
"<br/>wrEnd: ".$wrEnd.
"<br/>ip: ".$ip.
"<br/>mac: ".$mac.
"<br/>serial: ".$serial.
"<br/>nap: ".$nap.
"<br/>slot: ".$slot.
"<br/>layer: ".$layer.
"<br/>lcp: ".$lcp.
"<br/>olt: ".$olt.
"<br/>gpon: ".$gpon.
"<br/>card: ".$card.
"<br/>box: ".$box;







 }else{
     header("location: ../pages/log-in.php");
 }

?>