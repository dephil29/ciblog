<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3>
  <div class="row">
    <div class="col-md-3">
      <img class="thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
    </div>
    <div class="col-md-9">
      <small>
        Posted on: <?php echo $post['pca']; ?> 
        by <strong><?php echo $post['username']; ?></strong>
        in <strong><?php echo $post['cat_name']; ?></strong>
      </small>
      <br>
      <?php echo word_limiter($post['body'], 50); ?>
      <br><br>
      <p><a class="btn btn-secondary" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read more...</a></p>
    </div>
  </div>
  <?php endforeach; ?>
<div class="pagination-links">
 <?php echo $this->pagination->create_links(); ?>
</div>