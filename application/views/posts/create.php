<h2><?= $title ?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('posts/create');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea  class="form-control" name="body" placeholder="Body" id="editor1"></textarea>
  </div>
  <div class="form-group">
  <label>Category:</label>  
  <select name="category_id" class="form-control">
    <?php foreach($categories as $category):?>
    <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
<?php endforeach;?>
  </select>
</div>
<div class="form-group">
  <label>Upload Image</label>
  <input type="file" name="userfile" size="20">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>