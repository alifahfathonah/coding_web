<div class="panel panel-default"><!-- untuk membuat tempale kotak sesuai grid-->
  <p><br/><br/><p>
  <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="<?=base_url()?>index.php/login_control/update/<?=$editdata->id?>" method="post">
        <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="<?php echo $editdata->judul?>"required>
        </div>
        </div>
        
        <div class="form-group">
            <label for="input2" class="col-sm-2 control-label">Tanggal</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name ="tanggal" value="<?php echo $editdata->tanggal?>" required>
        </div>
        </div>

        <div class="form-group">
        <label for="input" class="col-sm-2 control-label">jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis" value="<?php echo $editdata->jenis?>"required>
        </div>
        </div>
        
        <div class="form-group">
          <label for="input3" class="col-sm-2 control-label">Isi</label>
        <div class="col-sm-10">
          <textarea name="isi" class="form-control"  required><?php echo $editdata->isi?></textarea>
        </div>
        </div>

       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <p>
              <button type="submit" class="btn btn-primary btn-lg" value ="kirim">Kirim</button>
            </p>
          </div>
        </div>
    </form>
 </div>
</div>