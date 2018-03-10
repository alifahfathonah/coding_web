<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deka Project</title>

    <link href="<?php echo base_url()?>assest/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assest/css/navbar.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
  <div class="container">
    <div class="header">
        <a class="judul"></a>
		<img src="logo.png">
				
</div>
		<div class="container">

      <!-- Static navbar -->

       <div class="bs-component">
			<div class="navbar navbar-inverse">
			<div class="navbar-header">
			<button class="navbar-toggle" data-target=".navbar-inverse-collapse" data-toggle="collapse" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
				  <li class="active">
				<a class="navbar-brand" href="<?php echo base_url()?>index.php/login_control/index_view">ABOUT NGALAM</a></div>
				<div class="navbar-collapse collapse navbar-inverse-collapse">
				<ul class="nav navbar-nav">
				
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="">TRAVELS<b class="caret"></b></a>
			<ul class="dropdown-menu">
			 <li><a href="<?php echo base_url()?>index.php/login_control/edukasi">Wisata Edukasi</a></li>
                  <li><a href="<?php echo base_url()?>index.php/login_control/wahana">Wisata Wahana</a></li>
                  <li><a href="<?php echo base_url()?>index.php/login_control/pantai">Wisata Pantai</a></li>
                  <li><a href="<?php echo base_url()?>index.php/login_control/agrowisata">Agrowisata</a></li> 
                  <li><a href="<?php echo base_url()?>index.php/login_control/air">Wisata Air</a></li>
				  <li><a href="<?php echo base_url()?>index.php/login_control/sejarah">Wisata Sejarah</a></li>
                  <li><a href="<?php echo base_url()?>index.php/login_control/alam">Wisata Alam</a></li>
                  <li><a href="<?php echo base_url()?>index.php/login_control/religi">Wisata Religi</a></li>
			</ul>
			</li>
			<li><a href="<?php echo base_url()?>index.php/login_control/popular">POPULAR</a></li>
			 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFO TRAVELS<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
           
              <li><a href="<?php echo base_url()?>index.php/login_control/hotel">Info Hotel</a></li>
			  <li><a href="<?php echo base_url()?>index.php/login_control/lokasi">Info Lokasi</a></li>
			  
            </ul>
			</li>
			<li><a href="<?php echo base_url()?>index.php/login_control/tips">TIPS TRAVELLING</a></li>
               
           	</ul>
			</li>
			</ul>
			</div>
			</div>
			</div>

    </div> <!-- /container -->
	
	<div id="content">
    <div class="container">
        <div class="row">
		<div align="justify">
            <div class="col-sm-9"><!--GRID 6 DI LAYAR SMALL-->
		<h1> POPULAR </h1>
		
		       <?php
				foreach($isi as $data):
				echo"<h1>$data->judul </h1><br>";
				echo"<i>Diposting pada tanggal : $data->tanggal<br><br></i>";
				echo $data->isi;
                 endforeach;
				
				?>
		</div>
		</div>
		</div>
            
        </div>
    </div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
 </body>
</html>

	