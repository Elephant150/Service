<?php get_header(); ?>
<!-- content top -->
<section class="main-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="wrap-main">
          <h1 class="main-title">
            <?php echo get_bloginfo('name') ?>
          </h1>
          <div class="main-desc">
              <?php echo get_bloginfo('description') ?>
          </div>
          <!-- button - Register -->
          <div class="wrap-btn">
            <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
              Register
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- service section start -->
<?php 
  $idObj = get_category_by_slug('services');
  $id = $idObj->term_id;
?>
<section class="serv-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="section-title"><?php echo get_cat_name($id); ?></h2>
      </div>
    </div>
    <div class="row">
      <?php
        $args = array(
          'cat' => $id,
          'order' => 'ASC',
          'posts_per_page' => 4,
        );
        $query = new WP_Query($args);
        while($query->have_posts() ) { $query->the_post()
      ?>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <article id="post-<?php the_ID(); ?>" class="serv-item">
          <div class="serv-item-img">
            <a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail(array(200,200)); ?>
          </a>
        </div>
        <h3 class="serv-item-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="serv-item-desc">
          <?php the_excerpt(); ?>
        </div>
      </article>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>
</div>
</section>
<!-- services section end -->
<!-- customer service -->
<section class="client-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="section-title">Customer service</h2>
      </div>
    </div>
    <div class="row">
      <?php 
        while(have_posts()): the_post();
          get_template_part('template-parts/content', 'main');
        endwhile;
      ?>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="wrap-btn">
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
            Register
          </button>
        </div>
      </div>
    </div>
</section>
<!-- bottom -->
<?php get_footer(); ?>