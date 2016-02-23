<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HAMASAH - Mutabaah</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <?php if($base == "Home" || $base == "User"): ?>
    <link href="<?php echo base_url(); ?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/timeline/timeline.css" rel="stylesheet">
    <?php endif; ?>

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Assalamualaikum Wr.Wb <?php echo $this->session->userdata('nama') ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            <?php /* ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <?php */ ?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> -->
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <!-- <li class="divider"></li> -->
                        <li><a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php /* ?>
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?php */ ?>
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>mutabaah"><i class="fa fa-edit fa-fw"></i> Entry Mutaba'ah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>user"><i class="fa fa-table fa-fw"></i> Users</a>
                        </li>
                        <?php /* ?>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php */ ?>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php $this->load->view($mainpage); ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.js"></script>

    <?php if($base == "User"): ?>
        <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

        <!-- Page-Level Plugin Scripts - Tables -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
        </script>
    <?php endif; ?>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <?php if($base == "Home"): ?>
        <script src="<?php echo base_url(); ?>assets/js/demo/dashboard-demo.js"></script>
    <?php endif; ?>

    <?php if($base == "Mutabaah"): ?>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript">
          $(function() {
              $("#birthdate").datepicker({
                  dateFormat: "yy-mm-dd",
                  changeMonth: true,
                  changeYear: true,
                  yearRange: "-50:+0",
              });
          });
        </script>
    <?php endif; ?>

    <?php if($base == "User"): ?>
    <script>
        $(function() {

            Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                    y: 'Januari',
                    a: <?php echo ($chart['januari'][0]->total_sholat_jamaah ? $chart['januari'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['januari'][0]->total_shubuh_jamaah ? $chart['januari'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['januari'][0]->total_sholat_dhuha ? $chart['januari'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['januari'][0]->total_tilawah ? $chart['januari'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['januari'][0]->total_shodaqoh ? $chart['januari'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['januari'][0]->total_qiyamulail ? $chart['januari'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['januari'][0]->total_berita_islam ? $chart['januari'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['januari'][0]->total_muhasabah ? $chart['januari'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['januari'][0]->total_hafalan_harian ? $chart['januari'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['januari'][0]->total_olahraga_harian ? $chart['januari'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['januari'][0]->total_istigfar_100 ? $chart['januari'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['januari'][0]->total_almasurat ? $chart['januari'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Februari',
                    a: <?php echo ($chart['februari'][0]->total_sholat_jamaah ? $chart['februari'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['februari'][0]->total_shubuh_jamaah ? $chart['februari'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['februari'][0]->total_sholat_dhuha ? $chart['februari'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['februari'][0]->total_tilawah ? $chart['februari'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['februari'][0]->total_shodaqoh ? $chart['februari'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['februari'][0]->total_qiyamulail ? $chart['februari'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['februari'][0]->total_berita_islam ? $chart['februari'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['februari'][0]->total_muhasabah ? $chart['februari'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['februari'][0]->total_hafalan_harian ? $chart['februari'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['februari'][0]->total_olahraga_harian ? $chart['februari'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['februari'][0]->total_istigfar_100 ? $chart['februari'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['februari'][0]->total_almasurat ? $chart['februari'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Maret',
                    a: <?php echo ($chart['maret'][0]->total_sholat_jamaah ? $chart['maret'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['maret'][0]->total_shubuh_jamaah ? $chart['maret'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['maret'][0]->total_sholat_dhuha ? $chart['maret'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['maret'][0]->total_tilawah ? $chart['maret'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['maret'][0]->total_shodaqoh ? $chart['maret'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['maret'][0]->total_qiyamulail ? $chart['maret'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['maret'][0]->total_berita_islam ? $chart['maret'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['maret'][0]->total_muhasabah ? $chart['maret'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['maret'][0]->total_hafalan_harian ? $chart['maret'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['maret'][0]->total_olahraga_harian ? $chart['maret'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['maret'][0]->total_istigfar_100 ? $chart['maret'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['maret'][0]->total_almasurat ? $chart['maret'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'April',
                    a: <?php echo ($chart['april'][0]->total_sholat_jamaah ? $chart['april'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['april'][0]->total_shubuh_jamaah ? $chart['april'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['april'][0]->total_sholat_dhuha ? $chart['april'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['april'][0]->total_tilawah ? $chart['april'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['april'][0]->total_shodaqoh ? $chart['april'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['april'][0]->total_qiyamulail ? $chart['april'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['april'][0]->total_berita_islam ? $chart['april'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['april'][0]->total_muhasabah ? $chart['april'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['april'][0]->total_hafalan_harian ? $chart['april'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['april'][0]->total_olahraga_harian ? $chart['april'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['april'][0]->total_istigfar_100 ? $chart['april'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['april'][0]->total_almasurat ? $chart['april'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Mei',
                    a: <?php echo ($chart['mei'][0]->total_sholat_jamaah ? $chart['mei'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['mei'][0]->total_shubuh_jamaah ? $chart['mei'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['mei'][0]->total_sholat_dhuha ? $chart['mei'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['mei'][0]->total_tilawah ? $chart['mei'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['mei'][0]->total_shodaqoh ? $chart['mei'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['mei'][0]->total_qiyamulail ? $chart['mei'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['mei'][0]->total_berita_islam ? $chart['mei'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['mei'][0]->total_muhasabah ? $chart['mei'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['mei'][0]->total_hafalan_harian ? $chart['mei'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['mei'][0]->total_olahraga_harian ? $chart['mei'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['mei'][0]->total_istigfar_100 ? $chart['mei'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['mei'][0]->total_almasurat ? $chart['mei'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Juni',
                    a: <?php echo ($chart['juni'][0]->total_sholat_jamaah ? $chart['juni'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['juni'][0]->total_shubuh_jamaah ? $chart['juni'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['juni'][0]->total_sholat_dhuha ? $chart['juni'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['juni'][0]->total_tilawah ? $chart['juni'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['juni'][0]->total_shodaqoh ? $chart['juni'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['juni'][0]->total_qiyamulail ? $chart['juni'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['juni'][0]->total_berita_islam ? $chart['juni'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['juni'][0]->total_muhasabah ? $chart['juni'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['juni'][0]->total_hafalan_harian ? $chart['juni'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['juni'][0]->total_olahraga_harian ? $chart['juni'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['juni'][0]->total_istigfar_100 ? $chart['juni'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['juni'][0]->total_almasurat ? $chart['juni'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Juli',
                    a: <?php echo ($chart['juli'][0]->total_sholat_jamaah ? $chart['juli'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['juli'][0]->total_shubuh_jamaah ? $chart['juli'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['juli'][0]->total_sholat_dhuha ? $chart['juli'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['juli'][0]->total_tilawah ? $chart['juli'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['juli'][0]->total_shodaqoh ? $chart['juli'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['juli'][0]->total_qiyamulail ? $chart['juli'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['juli'][0]->total_berita_islam ? $chart['juli'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['juli'][0]->total_muhasabah ? $chart['juli'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['juli'][0]->total_hafalan_harian ? $chart['juli'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['juli'][0]->total_olahraga_harian ? $chart['juli'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['juli'][0]->total_istigfar_100 ? $chart['juli'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['juli'][0]->total_almasurat ? $chart['juli'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Agustus',
                    a: <?php echo ($chart['agustus'][0]->total_sholat_jamaah ? $chart['agustus'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['agustus'][0]->total_shubuh_jamaah ? $chart['agustus'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['agustus'][0]->total_sholat_dhuha ? $chart['agustus'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['agustus'][0]->total_tilawah ? $chart['agustus'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['agustus'][0]->total_shodaqoh ? $chart['agustus'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['agustus'][0]->total_qiyamulail ? $chart['agustus'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['agustus'][0]->total_berita_islam ? $chart['agustus'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['agustus'][0]->total_muhasabah ? $chart['agustus'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['agustus'][0]->total_hafalan_harian ? $chart['agustus'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['agustus'][0]->total_olahraga_harian ? $chart['agustus'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['agustus'][0]->total_istigfar_100 ? $chart['agustus'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['agustus'][0]->total_almasurat ? $chart['agustus'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'September',
                    a: <?php echo ($chart['september'][0]->total_sholat_jamaah ? $chart['september'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['september'][0]->total_shubuh_jamaah ? $chart['september'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['september'][0]->total_sholat_dhuha ? $chart['september'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['september'][0]->total_tilawah ? $chart['september'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['september'][0]->total_shodaqoh ? $chart['september'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['september'][0]->total_qiyamulail ? $chart['september'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['september'][0]->total_berita_islam ? $chart['september'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['september'][0]->total_muhasabah ? $chart['september'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['september'][0]->total_hafalan_harian ? $chart['september'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['september'][0]->total_olahraga_harian ? $chart['september'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['september'][0]->total_istigfar_100 ? $chart['september'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['september'][0]->total_almasurat ? $chart['september'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Oktober',
                    a: <?php echo ($chart['oktober'][0]->total_sholat_jamaah ? $chart['oktober'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['oktober'][0]->total_shubuh_jamaah ? $chart['oktober'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['oktober'][0]->total_sholat_dhuha ? $chart['oktober'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['oktober'][0]->total_tilawah ? $chart['oktober'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['oktober'][0]->total_shodaqoh ? $chart['oktober'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['oktober'][0]->total_qiyamulail ? $chart['oktober'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['oktober'][0]->total_berita_islam ? $chart['oktober'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['oktober'][0]->total_muhasabah ? $chart['oktober'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['oktober'][0]->total_hafalan_harian ? $chart['oktober'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['oktober'][0]->total_olahraga_harian ? $chart['oktober'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['oktober'][0]->total_istigfar_100 ? $chart['oktober'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['oktober'][0]->total_almasurat ? $chart['oktober'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'November',
                    a: <?php echo ($chart['november'][0]->total_sholat_jamaah ? $chart['november'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['november'][0]->total_shubuh_jamaah ? $chart['november'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['november'][0]->total_sholat_dhuha ? $chart['november'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['november'][0]->total_tilawah ? $chart['november'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['november'][0]->total_shodaqoh ? $chart['november'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['november'][0]->total_qiyamulail ? $chart['november'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['november'][0]->total_berita_islam ? $chart['november'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['november'][0]->total_muhasabah ? $chart['november'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['november'][0]->total_hafalan_harian ? $chart['november'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['november'][0]->total_olahraga_harian ? $chart['november'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['november'][0]->total_istigfar_100 ? $chart['november'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['november'][0]->total_almasurat ? $chart['november'][0]->total_almasurat : 0 ); ?>
                }, {
                    y: 'Desember',
                    a: <?php echo ($chart['desember'][0]->total_sholat_jamaah ? $chart['desember'][0]->total_sholat_jamaah : 0 ); ?>,
                    b: <?php echo ($chart['desember'][0]->total_shubuh_jamaah ? $chart['desember'][0]->total_shubuh_jamaah : 0 ); ?>,
                    c: <?php echo ($chart['desember'][0]->total_sholat_dhuha ? $chart['desember'][0]->total_sholat_dhuha : 0 ); ?>,
                    d: <?php echo ($chart['desember'][0]->total_tilawah ? $chart['desember'][0]->total_tilawah : 0 ); ?>,
                    e: <?php echo ($chart['desember'][0]->total_shodaqoh ? $chart['desember'][0]->total_shodaqoh : 0 ); ?>,
                    f: <?php echo ($chart['desember'][0]->total_qiyamulail ? $chart['desember'][0]->total_qiyamulail : 0 ); ?>,
                    g: <?php echo ($chart['desember'][0]->total_berita_islam ? $chart['desember'][0]->total_berita_islam : 0 ); ?>,
                    h: <?php echo ($chart['desember'][0]->total_muhasabah ? $chart['desember'][0]->total_muhasabah : 0 ); ?>,
                    i: <?php echo ($chart['desember'][0]->total_hafalan_harian ? $chart['desember'][0]->total_hafalan_harian : 0 ); ?>,
                    j: <?php echo ($chart['desember'][0]->total_olahraga_harian ? $chart['desember'][0]->total_olahraga_harian : 0 ); ?>,
                    k: <?php echo ($chart['desember'][0]->total_istigfar_100 ? $chart['desember'][0]->total_istigfar_100 : 0 ); ?>,
                    l: <?php echo ($chart['desember'][0]->total_almasurat ? $chart['desember'][0]->total_almasurat : 0 ); ?>
                }],
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'],
                labels: ['Sholat Jamaah', 'Shubuh Jamaah', 'Sholat Dhuha', 'Tilawah Quran',
                        'Shodaqoh', 'Qiyamulail', 'Baca Berita Islam', 'Muhasabah', 'Hafalan Quran',
                        'Olahraga Harian', 'Istigfar 100x', 'Almasurat'
                ],
                hideHover: 'auto',
                resize: true
            });

        });

    </script>
    <?php endif; ?>

</body>

</html>
