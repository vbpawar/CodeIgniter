<html>
<head>
    <title>CI Blogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    </head>
    <body>
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>posts">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>categories">Categories</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')):?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users/login">Login</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a>
      </li>
<?php endif;?>
<?php if($this->session->userdata('logged_in')):?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>posts/create">create post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>categories/create">create Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>users/logout">Logout</a>
      </li>
      <?php endif;?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  
<div class="container">
<?php if($this->session->flashdata('user_registered')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('category_created')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('post_deleted')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('post_created')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('post_updated')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('login_failed')):?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('user_logged_out')):?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_logged_out').'</p>';?>
<?php endif;?>
<?php if($this->session->flashdata('user_logged_in')):?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_in').'</p>';?>
<?php endif;?>