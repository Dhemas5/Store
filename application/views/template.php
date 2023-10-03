<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dheemas | Store</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/store.png" type="image/png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.css">
    <style>
        .swal2-popup {
            font-size: 1.4rem !important;
        }
    </style>
</head>

<body class="hold-transition skin-yellow sidebar-mini <?= $this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null ?>">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url() ?>assets/index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>666</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>666 |</b> Store</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?= $this->fungsi->user_login()->name ?>
                                        <small><?= $this->fungsi->user_login()->address ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('index.php/auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/img/store.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->username) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('index.php/dashboard') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li class="header">MASTER</li>
                    <li <?= $this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('index.php/supplier') ?>"><i class="fa fa-truck"></i><span>Supplier</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'member' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('index.php/member') ?>"><i class="fa fa-users"></i><span>Members</span></a>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'kategori' || $this->uri->segment(1) == 'unit'  || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-archive"></i> <span>Produk</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'kategori' ? 'class="active"' : '' ?>><a href="<?= site_url('index.php/kategori') ?>"><i class="fa fa-circle-o"></i>Kategori</a></li>
                            <li <?= $this->uri->segment(1) == 'unit' ? 'class="active"' : '' ?>><a href="<?= site_url('index.php/unit') ?>"><i class="fa fa-circle-o"></i>Size</a></li>
                            <li <?= $this->uri->segment(1) == 'item' ? 'class="active"' : '' ?>><a href="<?= site_url('index.php/item') ?>"><i class="fa fa-circle-o"></i>Items</a></li>
                        </ul>
                    </li>
                    <li class="header">TRANSAKSI</li>
                    <li class="treeview <?= $this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'sale' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'sale' ? 'class="active"' : '' ?>><a href="<?= site_url('index.php/sale') ?>"><i class="fa fa-circle-o"></i>Penjualan</a></li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>><a href="<?= site_url('index.php/stock/in') ?>"><i class="fa fa-circle-o"></i>Stock In</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Stock Out</a></li>
                        </ul>
                    </li>
                    <li class="header">LAPORAN</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-circle-o"></i>Sales</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Stocks</a></li>
                        </ul>
                    </li>
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">SETTINGS</li>
                        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('index.php/user/user_data') ?>"><i class="fa fa-user"></i><span>Users</span></a>
                        </li>
                    <?php } ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- jQuery 3 -->
        <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2023 </a>. 666 | Store</strong> All rights
            reserved.
        </footer>

        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
        <!-- Data Tables -->
        <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

        <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.css"></script>

        <script>
            var flash = $('#flash').data('flash');
            if (flash) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: flash,
                    showClass: {
                        popup: 'animate__animated animate__backInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__backOutUp'
                    }
                })
            }

            $(document).on('click', '#btn-hapus', function(e) {
                e.preventDefault();
                var link = $(this).attr('href');

                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Data Akan Dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#00a65a',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    showClass: {
                        popup: 'animate__animated animate__zoomInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__zoomOut'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                })
            })
        </script>

        <script>
            $(document).ready(function() {
                $('#table1').DataTable()
            })
        </script>
</body>

</html>