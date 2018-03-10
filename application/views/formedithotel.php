<?=$this->session->flashdata('pesan2')?>
<p><br/><br/><br/></p>
  <div class="panel panel-default">
    <div class="panel-body"> 
      <form action="<?=base_url()?>index.php/login_control/update_hotel/<?=$hoteledit->id?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputnama">nama</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $hoteledit->nama?>" placeholder="nama" required>
        </div>
        <div class="form-group">
          <label for="inputjenis">jenis</label>
          <input type="text" class="form-control" name="jenis" value="<?php echo $hoteledit->jenis?>" placeholder="jenis" required>
        </div>
        <div class="form-group">
          <label for="inputisi">isi</label>
         <textarea name="isi"class="form-control" placeholder="deskripsi hotel" required><?php echo $hoteledit->isi?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" name="foto" value="">
          <p class="help-block">upload foto hotel dengan format jpg</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>