<?php
/*
Template Name: Archives
*/

  get_header();
  query_posts("showposts=-1");
  ?>
  <div id="cos">
    <div class="page archivos">
  <?php
  $data = "";
  while(have_posts()): the_post();

  if (!is_linked_list()):

    if (get_the_time("m/Y") != $data):
?>
    <h2><?= the_time("F \d\e Y"); ?></h2>
    <?php endif; ?>
    <h4>
      <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
      &nbsp;&nbsp;
      <span class="infopost"><?= the_time("j \d\e F"); ?></span>
    </h4>
<?php
  	$data = get_the_time("m/Y");
  endif; // !is_linked_list

	endwhile;
	?>
	 </div>
	</div><!-- #cos -->
	<?php get_footer(); ?>
