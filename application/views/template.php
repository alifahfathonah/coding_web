<?php $this->load->view('header');?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<?php $this->load->view('nav');?>
</nav>
<div class="container">
	<?php $this->load->view($conten);?>
</div>
<?php $this->load->view('footer');?>