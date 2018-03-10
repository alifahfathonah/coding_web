 <div class="row">
 <p><br/><br/><br/></p>
  <div class="span12">
     <!-- Build your select: -->
      <a href="<?=base_url()?>index.php/login_control/Tambah_admin" class="btn btn-primary">Tambah Admin</a>
      <hr/>
       <table class="table table-bordered table-striped">
                    <!-- On rows -->
                        <thead>
                        <tr>
                          <th> id</th>
                          <th>username</th>
                          <th>password</th>
                          <th>Aksi</th>
                        </tr>
                          <!-- On cells (`td` or `th`) -->
                        </thead>
                        <tbody>
                        <?php 
                          foreach($hasiladmin as $data):
                        ?>
                          <tr>
                            <td><?php echo $data->id;?></td>
                            <td><?php echo $data->username;?></td>
                            <td><?php echo $data->password;?></td>
                            <td>
                               <a href="<?=base_url()?>index.php/login_control/adminedit/<?=$data->id?> " class="btn mini btn-primary">Edit</a>  <a href="<?=base_url()?>index.php/login_control/deleteadmin/<?=$data->id?>" class="btn btn-warning"onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                            </td>
                          </tr>
                          <?php
                              endforeach;
                          ?>
                        </tbody>
              </table>
    </div>
  </div>