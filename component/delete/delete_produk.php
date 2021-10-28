<?php
include "../../configuration/config_connect.php";
include "../../configuration/config_session.php";
include "../../configuration/config_etc.php";
$forward =$_GET['forward'];
$no = $_GET['no'];
$forwardpage = $_GET['forwardpage'];
$kode = $_GET['kode'];
$jumlah = $_GET['jumlah'];
$barang = $_GET['barang'];
$get = $_GET['get'];
$detail = $_GET['detail'];
?>

<?php
if($_SESSION['level'] =='admin'){

  if (mysqli_query($conn, $sql)) {
   $sqlx = "select SUM(biayaakhir) as biayaakhir from $forward where nota='".$kode."'";
   $hasil = mysqli_query($conn, $sqlx);
   $row=mysqli_fetch_assoc($hasil);
   $biayaakhir=$row['biayaakhir'];

   $sqlc3 = "update bayar set total='$biayaakhir' where nota='$kode'";
   $update = mysqli_query($conn, $sqlc3);

   $sql="select * from $forward where nota='$kode'";
   $hasil= mysqli_query($conn,$sql);
   if(mysqli_num_rows($hasil)==0){

    $sqlc3 = "update bayar set status='batal' where nota='$kode'";
    $update = mysqli_query($conn, $sqlc3);
  } ?>
  <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
    <form action="<?php echo $baseurl; ?>/ayalaundry/<?php echo $forwardpage;?>.php" name="frm1" method="post">
      <input type="hidden" name="kode" value="<?php echo $kode;?>" />
      <input type="hidden" name="hapusberhasil" value="1" />
    <?php } else{
     ?>   <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
       <input type="hidden" name="kode" value="<?php echo $kode;?>" />
       <input type="hidden" name="hapusberhasil" value="2" />
       <?php
     }
   }else{ ?>
     <body onload="setTimeout(function() { document.frm1.submit() }, 10)">
       <form action="<?php echo $baseurl; ?>/ayalaundry/<?php echo $forwardpage;?>.php" name="frm1" method="post">
        <input type="hidden" name="kode" value="<?php echo $kode;?>" />
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
    <meta http-equiv="refresh" content="10;url=jump.php?kode=<?php echo $kode.'&';?>forward=<?php echo $forward.'&';?>forwardpage=<?php echo $forwardpage; ?>">
  </body>
