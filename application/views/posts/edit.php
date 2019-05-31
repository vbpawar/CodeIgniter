<h2><?= $title ?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/update');?>
  <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $post['id'];?>">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea  class="form-control" id="editor1" name="body" placeholder="Body"><?php echo $post['body'];?></textarea>
  </div>
  <div class="form-group">
  <label>Category:</label>  
  <select name="category_id" class="form-control">
    <?php foreach($categories as $category):?>
    <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
<?php endforeach;?>
  </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>