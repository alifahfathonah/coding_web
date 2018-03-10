<p><br/><br/><br/></p>
  <div class="panel panel-default">
    <div class="panel-body"> 
    <?=$this->session->flashdata('pesan')?>
      <form action="<?=base_url()?>index.php/login_control/inserthotel" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputnama">nama</label>
          <input type="text" class="form-control" name="nama" value="<?=set_value('nama')?>" placeholder="nama" required>
        </div>
        <div class="form-group">
          <label for="inputjenis">jenis</label>
          <input type="text" class="form-control" name="jenis" value="<?=set_value('jenis')?>" placeholder="jenis" required>
        </div>
        <div class="form-group">
          <label for="inputisi">isi</label>
            <textarea name="isi" class="form-control" value="<?=set_value('isi')?>" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" name="foto" value="<?=set_value('foto')?>">
          <p class="help-block">upload foto hotel dengan format jpg</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>