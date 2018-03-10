<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Malang Tour</title>

	<link rel="shortcut icon" href="<?php echo base_url()?>assest3/images/gt_faviconn.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo base_url()?>assest3/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assest3/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo base_url()?>assest3/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo base_url()?>assest3/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assest3/js/html5shiv.js"></script>
	<script src="assest3/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
				<!-- Button for smallest screens -->
			<img src="<?php echo base_url()?>assest3/images/Malang.jpg">
			
	<!-- /.navbar -->

	

	<!-- container -->
	<div class="container">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-8">
	<p><br/></p>
	<div class="panel panel-default">
    <div class="panel-body">
	<div class="ghabox">
	<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>index.php/login_control/index_view">Home</a></li>
			<li class="active">Hotel Bintang 5 </li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title" style="text-align: center;">Hotel Bintang 5</h1>
				</header>
				<p>
				
					
               <?php
				foreach($data_hotel as $data1):
			    ?>
				<?php echo "<h2>$data1->nama</h2><br/>";?>
				<img src="<?php echo base_url()?>image/upload/<?=$data1->foto?>"><br/><br/>
                <?php echo "$data1->isi;"?>
                <?php
                 endforeach;
                 ?>
				
				</p>
			</article>
			<!-- /Article -->
</div>
</div>
</div>
</div>
</div>


			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">
			<div class="widget">
		    <div class="panel panel-info">
		    <div class="panel-heading">
		    <div class="panel-body">
		    <div class="ghabox-side">
					<h4>Categoris Penginapan</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="<?php echo base_url()?>index.php/login_control/villa">Villa</a></li>
						<li><a href="<?php echo base_url()?>index.php/login_control/bintang1">Hotel Bintang 1</a></li>
						<li><a href="<?php echo base_url()?>index.php/login_control/bintang2">Hotel Bintang 2</a></li>
						<li><a href="<?php echo base_url()?>index.php/login_control/bintang3">Hotel Bintang 3</a></li>
						<li><a href="<?php echo base_url()?>index.php/login_control/bintang4">Hotel Bintang 4</a></li>
						<li><a href="<?php echo base_url()?>index.php/login_control/bintang5">Hotel Bintang 5</a></li>
						</ul>
				</div>
			</div>
			</div>
			</div>
			</div>
			</aside>
			<!-- /Sidebar -->
</div>
</div>
</div>
		
	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>085745364161<br>
								<a href="mailto:#">grevikob@gmail.com</a><br>
								<br>
								
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Created by</h3>
						<div class="widget-body">
							<p>Kelompok 6</p>
							</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, Designed by Kelompok 6 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assest3/js/headroom.min.js"></script>
	<script src="<?php echo base_url()?>assest3/js/jQuery.headroom.min.js"></script>
	<script src="<?php echo base_url()?>assest3/js/template.js"></script>
</body>