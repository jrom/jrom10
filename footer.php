
      
    
    <div id="sidebar">
      <?php get_sidebar(); ?>
    </div><!-- #sidebar -->
    <div class="clear"> </div>
    <?php if ( is_user_logged_in() ): ?> 
    <p><?php echo get_num_queries(); ?> queries en <?php timer_stop(1); ?> segundos</p>
    <?php endif; ?>
  </div><!-- .wrap -->
<?php wp_footer(); ?>
</body>
</html>
