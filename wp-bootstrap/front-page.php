<?php get_header(); ?>
<section class="showcase">
    <h1>Custom Bootstrap WordPress Theme</h1>
    <p>Simple, yet elegant.</p>
    <a class="btn btn-primary btn-lg text-light">Read More</a>
</section>

<section class="boxes">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
          <?php if( is_active_sidebar('box1') ) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if( is_active_sidebar('box2') ) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if( is_active_sidebar('box3') ) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<?php get_footer(); ?>
