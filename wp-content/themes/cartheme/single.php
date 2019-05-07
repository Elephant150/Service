<?php get_header(); ?>
<!-- service section start -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
      <main class="page-main" role="main">
        <?php
        while (have_posts()) : the_post();
        get_template_part('template-parts/content', get_post_format());
        endwhile;
        ?>
      </main>
      <div class="wrap-btn">
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
          Register
        </button>
      </div>
    </div>
    <div class="hidden-xs col-sm-4 col-md-4 col-lg-3">
      <div class="wrap-sidebar">
        <?php
        $idObj = get_category_by_slug('services');
        $id = $idObj->term_id;
        ?>
        <header class="sidebar-header">
          <h3 class="sidebar-title">
            <?php echo get_cat_name($id); ?>
          </h3>
        </header>
        <div class="sidebar-content">
          <?php
          $args = array(
            'cat' => $id,
            'order' => 'ASC',
            'posts_per_page' => 4,
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post()
            ?>
          <h4 class="sidebar-item-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php 
        }
        wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- services section end -->
<?php get_footer(); ?>