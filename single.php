<?php
  get_header();
  get_template_part( 'template-parts/sub-header', 'page' );
?>

<?php while(have_posts()) {
  the_post(); ?>
    <article id="fullPost">
      <?php the_content();?>
    </article>
    <div class="navbar">
      <div id="backbutton">
         <a href="javascript:history.back()">
          <img src="<?php echo get_theme_file_uri('./images/Back-button.png') ?>" width="24" height="24" />
        </a>
      </div>
    </div>
<?php 
    }
    get_footer();
?>

