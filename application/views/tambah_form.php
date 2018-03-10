 <p><br/><br/><br/><p>
<div class="panel panel-default"><!-- untuk membuat tempale kotak sesuai grid-->
<?=validation_errors()?>
  <div><?php echo $this->session->flashdata('error')?></div>
  <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="<?=base_url()?>index.php/login_control/insert" method="post">
        <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="" required>
        </div>
        </div>
        
        <div class="form-group">
            <label for="input2" class="col-sm-2 control-label">Tanggal</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name ="tanggal" value="" required>
        </div>
        </div>
        <div class="form-group">
          <label for="input3" class="col-sm-2 control-label">Jenis</label>
        <div class="col-sm-10">
           <input type="text" class="form-control" name ="jenis" value="" required>
        </div>
        </div>
        
        <div class="form-group">
          <label for="input4" class="col-sm-2 control-label">Isi</label>
        <div class="col-sm-10">
          <textarea name="isi" class="form-control" value="" required></textarea>
        </div>
        </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <p>
              <button type="submit" class="btn btn-primary btn-lg" value ="submit">Tambah Artikel</button>
            </p>
          </div>
        </div>
    </form>
  </div>
</div>


                                 