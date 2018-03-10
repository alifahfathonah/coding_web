

<div class="panel panel-default"><!-- untuk membuat tempale kotak sesuai grid-->
  <p><br/><br/><p>
  <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="<?=base_url()?>index.php/login_control/update_admin/<?=$edit->id?>" method="post">
        <div class="form-group">
        <label for="input1" class="col-sm-2 control-label">username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username" value="<?php echo $edit->username?>" required>
        </div>
        </div>
        
        <div class="form-group">
            <label for="input2" class="col-sm-2 control-label">password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name ="password" value="<?php echo $edit->password?>" required>
        </div>
        </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <p>
             
              <button type="submit" class="btn btn-primary btn-lg" value ="submit">Edit admin</button>
            </p>
          </div>
        </div>
    </form>
  </div>
</div>
