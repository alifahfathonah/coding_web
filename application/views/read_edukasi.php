<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
            <table class="table table-bordered table-striped">
                    <!-- On rows -->
                        <thead>
                          <th> id</th>>
                          <th>judul</th>>
                          <th>tanggal</th>>
                          <th>isi</th>>
                          <!-- On cells (`td` or `th`) -->
                        </thead>
                        <tbody>
                        <?php 
                          foreach($hasilTransaksi as $data):
                        ?>
                          <tr>
                            <td><?php echo $data->id;?></td>
                            <td><?php echo $data->judul;?></td>
                            <td><?php echo $data->tanggal;?></td>
                            <td><?php echo $data->isi;?></td>
                          </tr>
                          <?php
                              endforeach;
                          ?>
                        </tbody>
                </table>
                 <button type="submit" class="btn btn-primary">Tambah Artikel</button>
           </div>
        </div>
  

  <!--<?php
  print_r($data);
  ?>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>