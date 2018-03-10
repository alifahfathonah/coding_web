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
			<li class="active">Wisata alam</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title" style="text-align: center;">Wisata alam</h1>
				</header>
				 <?php
				
			    foreach($isi as $data):
				echo"<h2>$data->judul </h2><br>";
				echo"<i>Diposting pada tanggal : $data->tanggal<br><br></i>";
				echo $data->isi;
                 endforeach;
				
				?>
			</article>
			<!-- /Article -->
</div>
</div>
</div>
</div>
</div>