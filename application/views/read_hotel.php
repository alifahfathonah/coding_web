 <div class="row">
 <p><br/><br/><br/></p>
  <div class="span12">
     <!-- Build your select: -->
      <a href="<?=base_url()?>index.php/login_control/datahotel" class="btn btn-primary">Tambah Hotel</a>
      <hr/>
       <table class="table table-bordered table-striped">
                    <!-- On rows -->
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>nama</th>
                          <th>jenis</th>
                          <th>isi</th>
                          <th>foto</th>
                          <th>Aksi</th>
                        </tr>
                          <!-- On cells (`td` or `th`) -->
                        </thead>
                        <tbody>
                        <?php 
                          foreach($hotel as $data):
                        ?>
                          <tr>
                            <td><?php echo $data->id;?></td>
                            <td><?php echo $data->nama;?></td>
                            <td><?php echo $data->jenis;?></td>
							<td><?php echo substr($data->isi, 0,50);?></td>
                            <td> <img src="<?php echo base_url()?>image/upload/<?=$data->foto?>"></td>
                            <td>
                               <a href="<?=base_url()?>index.php/login_control/edithotel/<?=$data->id?> " class="btn mini btn-primary">Edit</a> 
                               <p><br/></p> 
                               <a href="<?=base_url()?>index.php/login_control/hoteldelete/<?=$data->id?>" class="btn btn-warning"onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                            </td>
                          </tr>
                          <?php
                              endforeach;
                          ?>
                        </tbody>
              </table>
    </div>
  </div>
