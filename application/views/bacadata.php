<p><br/><br/><br/></p>
<div class="row">
 <p><br/><br/><br/></p>
  <div class="span12">
       <table class="table table-bordered table-striped">
                    <!-- On rows -->
                        <thead>
                        <tr>
                          <th> id</th>
                          <th>judul</th>
                          <th>tanggal</th>
                          <th>Jenis</th>
                          <th>isi</th>
                          <th>Aksi</th>
                        </tr>
                          <!-- On cells (`td` or `th`) -->
                        </thead>
                        <tbody>
                        <?php 
                          foreach($baca as $data):
                        ?>
                          <tr>
                            <td><?php echo $data->id;?></td>
                            <td><?php echo $data->judul;?></td>
                            <td><?php echo $data->tanggal;?></td>
                            <td><?php echo $data->jenis;?></td>
                            <td><?php echo substr($data->isi, 0,50).'<next>';?></td>
                            <td>
                               <a href="<?=base_url()?>index.php/login_control/edit/<?=$data->id?> " class="btn btn-primary">Edit</a>  <a href="<?=base_url()?>index.php/login_control/delete/<?=$data->id?>" class="btn btn-warning"onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                            </td>
                          </tr>
                          <?php
                              endforeach;
                          ?>
                        </tbody>
              </table>
               <a href="<?=base_url()?>index.php/login_control/jenisdata"class="btn btn-info">Back</a> 
    </div>
  </div>