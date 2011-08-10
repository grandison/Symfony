<h1>
  User posts List
</h1>
<?php foreach ($blog_posts as $blog_post): ?>
  <div class="post" id="post<?php echo $blog_post->getId()?>">
    <p>
      <?php echo $blog_post->Author ?>
      в
      <?php echo $blog_post->getCreatedAt() ?>
      написал:
    </p>
    <?php echo link_to($blog_post->getTitle(),url_for('post/show?id='.$blog_post->getId()))?>
    <?php echo $blog_post->getSource() ?>
    <p id="post_rating">
      <?php echo $blog_post->rating ?>
    </p>
    <?php if($sf_user->isAuthenticated()) { ?>
      <input value="Голосовать" class="post_vote" post="<?php echo $blog_post->getId()?>" type="button">
    <?php } ?>
  </div>
<?php endforeach; ?>
  <a href="<?php echo url_for('post/new') ?>">New</a>

