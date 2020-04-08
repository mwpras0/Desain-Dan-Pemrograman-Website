<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<title>Penjualan Kasir</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/libs/bootstrap/dist/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>

</body>

</html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
							class="ti-menu ti-close"></i></a>
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="<?= site_url('dashboard') ?>">
						<!-- Logo icon -->
						<b class="logo-icon p-l-10">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="<?php echo base_url() ?>assets/assets/images/logo4.png" alt="homepage"
								class="light-logo" />

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="<?php echo base_url() ?>assets/assets/images/logo-text.png" alt="homepage"
								class="light-logo" />

						</span>
						<!-- Logo icon -->
						<!-- <b class="logo-icon"> -->
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<!-- <img src="<?php echo base_url() ?>assets/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

						<!-- </b> -->
						<!--End Logo icon -->
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Toggle which is visible on mobile only -->
					<!-- ============================================================== -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
						data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
							class="ti-more"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<li class="nav-item d-none d-md-block"><a
								class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
								data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
					</ul>
					<!-- ============================================================== -->
					<!-- End Comment -->
					<!-- ============================================================== -->

					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<li class="nav-item dropdown" style="list-style-type: none">
						<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img
								src="<?php echo base_url() ?>assets/assets/images/users/7.jpg" alt="user"
								class="rounded-circle" width="43">
							<span class="hidden-xs ml-2 mr-3"><?php echo $this->fungsi->user_login()->username ?></span>
							</a>						
						<div class="dropdown-menu dropdown-menu-right user-dd animated" style="top: 62px; right:5px;">
							<a class="dropdown-item disabled text-center" style="background-color: #141619;">
								<img src="<?php echo base_url() ?>assets/assets/images/users/7.jpg" class="rounded-circle mt-4 border border-white"  width="80" alt="User Image">
								<h4 class="mt-3 text-white"><?php echo $this->fungsi->user_login()->name; ?>
								
										<p style="color :grey; font-size: 14px;"><?php echo $this->fungsi->user_login()->address; ?></p>
								</h4>
							</a>
							<a class="dropdown-item mt-2" href="<?= site_url('auth/logout'); ?>"><i
									class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
							
						</div>
					</li>
					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin5">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav" class="p-t-30">
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
								href="<?= site_url('dashboard') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
									class="hide-menu">Dashboard</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
								href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-buffer"></i><span
									class="hide-menu">Produk </span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="<?= site_url('category') ?>" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span class="hide-menu">
											Kategori </span></a></li>
								<li class="sidebar-item"><a href="<?= site_url('unit') ?>" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span class="hide-menu">
											Unit </span></a></li>
								<li class="sidebar-item"><a href="<?=site_url('item')?>" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span class="hide-menu">
											Item </span></a></li>
							</ul>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
								href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart"></i><span
									class="hide-menu">Transaksi</span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="#" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span
											class="hide-menu">Penjualan</span></a></li>
								<li class="sidebar-item"><a href="<?=site_url('stock/in')?>" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span
											class="hide-menu">Barang Masuk</span></a></li>
								<li class="sidebar-item"><a href="#" class="sidebar-link"><i
											class="mdi mdi-checkbox-blank-circle-outline"></i><span
											class="hide-menu">Barang Keluar</span></a></li>
							</ul>
						</li>
						<?php if($this->fungsi->user_login()->level == 1) { ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="<?= site_url('user') ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                        class="hide-menu">Pengguna</span></a>
                            </li>
                        <?php } ?>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<?= $contents ?>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?php echo base_url() ?>assets/assets/libs/jquery/dist/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?php echo base_url() ?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data Table -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="<?php echo base_url() ?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js">
	</script>
	<script src="<?php echo base_url() ?>assets/assets/extra-libs/sparkline/sparkline.js"></script>
	<!--Wave Effects -->
	<script src="<?php echo base_url() ?>assets/dist/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?php echo base_url() ?>assets/dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?php echo base_url() ?>assets/dist/js/custom.min.js"></script>


	<script>
		$(document).ready(function(){
			$('#data_table').DataTable()
		});	
	</script>


</body>

</html>
