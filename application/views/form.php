<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Login</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
          background-color: #E5F2F8;
        }
    </style>
  </head>
  <body>
      
      <div class="container">
          <p><br/></p>
          <div class="row">
         <?=validation_errors()?>
         <div><?php echo $this->session->flashdata('error')?></div>
               <div class="col-md-8"></div>
                <div class="col-md-4">
                     <div class="panel panel-default">
                          <div class="panel-body">
                                <div class="page-header">
                                      <h1>Login Area</h1>
                                </div>
                                 
                                  <form action="<?=base_url()?>index.php/login_control" method="post">
                                  <div class="form-group">
                                      <label for="InputEmail1">Username</label>
                                        <input type="text" class="form-control" name="username" 
                                        placeholder="Username" value="<?=set_value('username')?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="InputPassword1">Password</label>
                                      <input type="password" class="form-control" name="password" 
                                      placeholder="Password" value="<?=set_value('password')?>">
                                  </div>
                                  <div>
                                  <hr/>
                                     <div>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        <a class="btn btn-default" href="<?=base_url()?>index.php/login_control/index_view" role="button">Next</a>
                                    </div>
                                  </div>
                                </form>
                          </div>
                      </div>
                </div>
            </div>
        </div>
       
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.11.2"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>