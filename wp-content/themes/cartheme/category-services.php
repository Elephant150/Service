<?php get_header(); ?>
<!-- service section start -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <main class="page-main" role="main">
        <h1 class="section-title"><?php single_cat_title(); ?></h1>
        <div class="page-content">
          <div class="row">
          <?php
            while (have_posts()) : the_post();
              get_template_part('template-parts/content', 'services');
            endwhile;
          ?>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="page-desc">
                <?php echo category_description(); ?>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div class="wrap-btn">
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
          Register
        </button>
      </div>
    </div>
  </div>
</div>
<!-- services section end -->
<?php get_footer(); ?>