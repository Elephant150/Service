<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
  <article id="post-<?php the_ID();?>" class="serv-item">
    <div class="serv-item-img">
      <a href="<?php echo get_permalink(); ?>">
        <?php the_post_thumbnail(array(200, 200));?>
      </a>
    </div>
    <h3 class="serv-item-title"><a href="single.html">
        <?php the_title();?></a></h3>
    <div class="serv-item-desc">
      <?php the_excerpt();?>
    </div>
  </article>
</div>