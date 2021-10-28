<!DOCTYPE html>
<html>
<?php
include "configuration/config_include.php";
include "configuration/config_alltotal.php";
etc();encryption();session();connect();head();body();timing();
//pagination();
?>

<?php
if (!login_check()) { ?>
  <meta http-equiv="refresh" content="0; url=logout.php" />
<?php
  exit(0);
} ?>

<div class="wrapper">
<?php
  theader();
  menu();
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"></section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->

        <!-- SETTING START-->
        <?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $halaman = "index"; // halaman
        $dataapa = "Dashboard"; // data
        $tabeldatabase = "index"; // tabel database
        $forward = mysqli_real_escape_string($tabeldatabase); // tabel database
        $forwardpage = mysqli_real_escape_string($halaman); // halaman
        $search = $_POST['search'];
        ?>
        <!-- SETTING STOP -->

        <!-- BREADCRUMB -->
        <div class="col-lg-12">
          <ol class="breadcrumb ">
            <li><a href="#">Dashboard</a></li>
          </ol>
        </div>
      </div>

      <?php
      if($_SESSION['level'] == 'kasir' && $_SESSION['level'] != 'kasir'){

      }else{ ?>
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $terima; ?> <small style="color:white" >Laundrian</small></h3>
                <p>Belum Di Proses</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="order_data.php">  
                <button style="background-color: Transparent;border: none;" type="submit" name="search" value="Diterima" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $proses; ?><small style="color:white"> Laundrian</small></h3>
                <p>Dalam Proses</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="order_data.php">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" value="proses" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $dekat; ?><small style="color:white"> Laundrian</small></h3>
                <p>Diambil besok</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-blackboard"></i>
              </div>
              <form align="center" method="post" action="order_data.php">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" value="<?php echo $besok; ?>" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $ambil; ?><small style="color:white"> Laundrian</small></h3>
                <p>Diambil hari ini</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-folder-close"></i>
              </div>
              <form align="center" method="post" action="order_data.php">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" value="<?php echo $today; ?>" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- Main row -->
      <div class="row"></div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php footer();?>
  <div class="control-sidebar-bg"></div>
</div>
<script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="dist/plugins/morris/morris.min.js"></script>
<script src="dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="dist/plugins/daterangepicker/daterangepicker.js"></script>
<script src="dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>

</body>
</html>