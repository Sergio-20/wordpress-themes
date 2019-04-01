<?php get_header(); ?>

<style>
  .showcase {
    background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
  }
</style>

<section class="showcase">
    <h1><?php echo get_theme_mod('showcase_heading', 'Custom WordPress Bootstrap Theme'); ?></h1>
    <p><h1><?php echo get_theme_mod('showcase_text', 'Simple, yet elegant.'); ?></h1></p>
    <a href="<?php echo get_theme_mod('btn-url', 'https://www.google.com'); ?>" class="btn btn-primary btn-lg text-light"><?php echo get_theme_mod('btn-text', 'Read More'); ?></a>
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
