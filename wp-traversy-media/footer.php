<aside class="col-md-4 blog-sidebar">
  <?php if(is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
  <?php endif; ?>
</aside><!-- /.blog-sidebar -->

<footer class="blog-footer">
  <p>&copy;<?php echo Date('Y'); ?> - <?php bloginfo('name') ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<?php wp_footer() ?>

</body>
</html>
