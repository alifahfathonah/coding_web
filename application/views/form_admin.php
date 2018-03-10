 <p><br/><br/><br/><p>
<div class="panel panel-default"><!-- untuk membuat tempale kotak sesuai grid-->
  <?=validation_errors()?>
  <div><?php echo $this->session->flashdata('error2')?></div>
  <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="<?=base_url()?>index.php/login_control/insert_admin" method="post">
        <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username"  placeholder="Username" value="" required>
        </div>
        </div>
        
        <div class="form-group">
            <label for="input2" class="col-sm-2 control-label">password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name ="password"  placeholder="6-16 karakter password" value="" required>
        </div>
        </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <p>
             
              <button type="submit" class="btn btn-primary btn-lg" value ="submit">Tambah Admin</button>
            </p>
          </div>
        </div>
    </form>
  </div>
</div>