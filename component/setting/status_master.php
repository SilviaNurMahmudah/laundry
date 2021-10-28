<?php
include "../../configuration/config_connect.php";
include "../../configuration/config_session.php";
include "../../configuration/config_etc.php";
$forward =$_GET['forward'];
$no = $_GET['no'];
$forwardpage = $_GET['forwardpage'];
$status = $_GET['status'];
?>

<?php
if($_SESSION['level'] =='admin' || $_SESSION['level'] == 'kasir'){

$sql = "update $forward set status='$status' where no='".$no."'";

 if (mysqli_query($conn, $sql)) {
 ?>

  <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
  <form action="<?php echo $baseurl; ?>/ayalaundry/<?php echo $forwardpage;?>" name="frm1" method="post">

  <input type="hidden" name="hapusberhasil" value="1" />

<?php
 } else{
 ?>   <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
	  <input type="hidden" name="hapusberhasil" value="2" />
 <?php
 }
}
else{

 ?>
  <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
   <form action="<?php echo $baseurl; ?>/ayalaundry/<?php echo $forwardpage;?>" name="frm1" method="post">


	  <input type="hidden" name="hapusberhasil" value="2" />
 <?php
 }
?>
<table width="100%" align="center" cellspacing="0">
  <tr>
    <td height="500px" align="center" valign="middle"><img src="../../dist/img/load.gif">
  </tr>
</table>


   </form>
<meta http-equiv="refresh" content="10;url=jump?forward=<?php echo $forward.'&';?>forwardpage=<?php echo $forwardpage ?>">
</body>
