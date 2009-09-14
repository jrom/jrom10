<?php
/*
Template Name: Enlaces
*/

  get_header();
  query_posts("showposts=-1&meta_key=linked_list_url");
  ?>
  <div id="cos">
    <div class="page archivos">
  <?php
  $data = "";
  while(have_posts()): the_post();

    if (get_the_time("m/Y") != $data):
?>
    <h2><?= the_time("F \d\e Y"); ?></h2>
    <?php endif; ?>
    <h4>
      <a href="<?php the_linked_list_link(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      &nbsp;&nbsp;
      <span class="infopost"><?= the_time("j \d\e F"); ?>
      &nbsp;&nbsp;
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Enlace permanente a ‘<?php the_title_attribute(); ?>’" class="permalink"> ⚙ </a>
      </span>
    </h4>
<?php
  	$data = get_the_time("m/Y");

	endwhile;
	?>
	 </div>
	</div><!-- #cos -->
	<?php get_footer(); ?>
