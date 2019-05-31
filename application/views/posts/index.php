<h3><?= $title ?></h3>
<?php foreach ($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3>
  <div class="row">
    <div class="col-md-3">
      <img class="post_thumb" src="<?php echo base_url();?>assets/images/posts/<?php echo $post['post_image']; ?>"/>
    </div>
    <div class="col-md-9">
      <small class="post_date">Posted on: <?php echo $post['created_at']; ?>In <strong><?php echo $post['name']; ?></strong></small><br>
      <?php echo word_limiter($post['body'], 40); ?><br><br>
      <p><a href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
    </div>
  </div>
<?php endforeach; ?>