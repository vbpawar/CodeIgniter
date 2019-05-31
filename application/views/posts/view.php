<h2>
    <?php echo $post['title']; ?>
</h2>
<small class="post_date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="img-responsive" src="<?php echo base_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" />
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-primary pull-left">Edit</a>
<?php echo form_open('/posts/delete/' . $post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
<hr>
<h3>Comments</h3>
<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
    <div class="form-group">
        <div class="well well-sm">
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong> ]</h5>
        </div>
</div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" id="editor1" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button type="submit" class="btn btn-primary">Submit</button>