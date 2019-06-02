<?php echo form_open('users/login');?>
<div class="jumbotron">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?php echo $title;?></h1>
        <div class="form-group">
            <input type="text" name="username" placeholder="Enter Username" class="form-control" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Enter Password" class="form-control" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
    </div>
</div>
</form>