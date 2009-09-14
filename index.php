
<?php get_header(); ?>

<div id="cos">
  
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class((is_linked_list() ? "linked_list" : "")); ?> id="post-<?php the_ID(); ?>">

		    <?php if (is_linked_list()): ?>
			    <h3><a href="<?php the_linked_list_link(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			  <?php else: // is_linked_list ?>
			    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a ‘<?php the_title_attribute(); ?>’"><?php the_title(); ?></a></h1>
			    <?php if (!is_page()): ?>
    				<div class="infopost">
    				  <?php the_time('j \d\e F \d\e Y') ?>
    				  &bull; <?php comments_popup_link('0 comentarios', 'Un comentario','% comentarios', 'linkcomentarios', '' ); ?>
    				</div>
  				<?php endif; // !is_page ?>
			  <?php endif; // !is_linked_list ?>

				<div class="entry">
					<?php the_content(); ?>
				</div>
				<?php if (!is_page()): ?>
				  <div class="infopost">
  				  <?php the_time('j \d\e F \d\e Y') ?>
  				  &bull; <?php comments_popup_link('0 comentarios', 'Un comentario','% comentarios', 'linkcomentarios', '' ); ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Enlace permanente a ‘<?php the_title_attribute(); ?>’" class="permalink"> ⚙ </a>
  				</div>
				<?php endif; // !is_page ?>

			</div>
			
			<?php if (is_single()): ?>
			 <?php comments_template(); ?>
			<?php endif ?>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="error">ERROR: No se ha encontrado ninguna entrada.</h2>

	<?php endif; ?>

	<div id="footer">
    <?php if (!is_page()): ?>
      <h3>Encontrarás más en los <a href="/archivos">archivos</a>.</h3>
    <?php endif; // if is_home ?>
  </div><!-- #footer -->
</div><!-- #cos -->

<?php get_footer(); ?>
