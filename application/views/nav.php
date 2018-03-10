
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>index.php/login_control/beranda">Beranda</a></li>
        <li><a href="<?=base_url()?>index.php/login_control/hlmn_admin">Manage Admin</a></li>
         <li><a href="<?=base_url()?>index.php/login_control/index2">Manage Artikel</a></li>
		 <li><a href="<?=base_url()?>index.php/login_control/hlmn_hotel">Manage Hotel</a></li>
		 <li><a href="<?=base_url()?>index.php/login_control/jenisdata">Select Artikel</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>  Administrator  </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url()?>index.php/login_control/logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

