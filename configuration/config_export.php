<?php include 'config_connect.php';
$search = $_GET['search'];
$forward = $_GET['forward'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$forward.xls");

?>
<?php if($forward == 'bayar'){ ?>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>No Nota</th>
        <th>Tanggal</th>
        <th>Pelanggan</th>
        <th>Total Pembayaran</th>
        <th>Deadline</th>
      </tr>
    </thead>
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $query1="SELECT * FROM  bayar where nota like '%$search%' or tglmasuk like '%$search%' order by no ";
    $hasil = mysqli_query($conn,$query1);
    $no = 1;
    while ($fill = mysqli_fetch_assoc($hasil)){
     ?>
     <tbody>
      <tr>
        <td><?php echo ++$no_urut;?></td>
        <td><?php  echo mysqli_real_escape_string($conn, $fill['nota']); ?></td>
        <td><?php  echo mysqli_real_escape_string($conn, $fill['tglmasuk'].' / '.date('H:i', strtotime($fill['jammasuk']))); ?></td>
        <?php
        $pelanggan = $fill['pelanggan'];
        $sqle="SELECT nama FROM pelanggan WHERE kode ='$pelanggan'";
        $hasile=mysqli_query($conn,$sqle);
        $rowa=mysqli_fetch_assoc($hasile);
        $namapelanggan=$rowa['nama'];
        ?>
        <td><?php  echo mysqli_real_escape_string($conn, $namapelanggan); ?></td>
        <td><?php  echo mysqli_real_escape_string($conn, $fill['total']); ?></td>
        <td><?php  echo mysqli_real_escape_string($conn, $fill['tgldeadline'].' / '.date('H:i', strtotime($fill['jamdeadline']))); ?></td>
        </tr><?php
        ;
      } ?>
    </tbody>
  </table>
<?php } ?>
