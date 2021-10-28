<?php
include "configuration/config_connect.php";
include "configuration/config_chmod.php";
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php  echo $_SESSION['avatar']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php  echo $_SESSION['username']; ?></p>
                <a href="#"><i class="fa fa-circle text-online"></i>Online</a>
            </div>
        </div><br>
        <ul class="sidebar-menu">
            <!-- <li class="header">MENU UTAMA</li> -->
            <li class="treeview">
                <a href="index.php"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
            </li>
            <?php
            if($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'kasir'){ ?>                       
            <?php }else{

            }
            if($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'kasir'){ ?>
                <li class="treeview">
                    <a href="add_transaksi.php"> <i class="glyphicon glyphicon-shopping-cart"></i> <span>Transaksi</span> <span class="pull-right-container"> </span> </a>
                </li>
		    <?php }else{

            }
            if($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'kasir'){ ?>
                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-folder-close"></i> <span>Pelanggan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
                        <li>
                            <a href="pelanggan.php"><i class="fa fa-circle-o"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="add_pelanggan.php"><i class="fa fa-circle-o"></i>Tambah Pelanggan</a>
                        </li>
                    </ul>
                </li>
            <?php }else{

            }
            if($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'kasir'){ ?>
                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-inbox"></i> <span>Order</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="order_data.php"><i class="fa fa-circle-o"></i>Data Order</a>
                        </li>
                        <!-- <li>
                            <a href="order_batal.php"><i class="fa fa-circle-o"></i>Pembatalan Order</a>
                        </li> -->
                    </ul>
                </li>
            <?php }else{

            }
            if($_SESSION['level'] == 'admin'){ ?>
                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-pushpin"></i> <span>Jenis Layanan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="jenis.php"><i class="fa fa-circle-o"></i>Data Jenis</a>
                        </li>
                        <li>
                            <a href="add_jenis.php"><i class="fa fa-circle-o"></i>Tambah Jenis</a>
                        </li>
                    </ul>
                </li>
            <?php }else{

            }
            if($_SESSION['level'] == 'admin'){ ?>
                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-stats"></i> <span>Laporan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
  					<ul class="treeview-menu">
                        <li>
                            <a href="report_trx.php"><i class="fa fa-circle-o"></i>Transaksi Jual</a>
                        </li>
                        <li>
                            <a href="report_revenue.php"><i class="fa fa-circle-o"></i>Pendapatan</a>
                        </li>
                    </ul>
                </li>
            <?php }else{

            }
            
            if($_SESSION['level'] == 'admin'){ ?>
                <li class="treeview">
                    <a href="#"> <i class="glyphicon glyphicon-user"></i> <span>User</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="user.php"><i class="fa fa-circle-o"></i>Data User</a>
                        </li>
                        <li>
                            <a href="add_user.php"><i class="fa fa-circle-o"></i>Tambah User</a>
                        </li>
                    </ul>
                </li>
            <?php }else{

            }
            
            // if($_SESSION['level'] == 'admin'){ ?>
                <!-- <li class="treeview">
                    <a href=""> <i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span> <span class="pull-right-container"> </span> </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="set_general"><i class="fa fa-circle-o"></i>General Setting</a>
                        </li>
						<li>
						    <a href="set_themes"><i class="fa fa-circle-o"></i>Theme Setting</a>
                        </li>
                        <li>
                 			<a href="add_jabatan"><i class="fa fa-circle-o"></i>User Setting</a>
                        </li>
						<li>
							<a href="set_chmod"><i class="fa fa-circle-o"></i>Hak Akses</a>
                        </li>
                    </ul>
                </li>          -->
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
