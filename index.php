<?php get_header(); ?>

    <!--HOME BANNER-->
    <header class="home-banner">   
      <div>
         <img class="desktop-banner" alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">         
         <img class="mobile-banner" alt="" src="/wp-content/uploads/2020/02/mobile-banner.png">
      </div>

      <div class="banner-text">
        <h5>I’m a <span class="orange">french bulldog</span> living in the city of Dubai</h5>
        <div>
          <img src="<?php echo get_theme_file_uri('./images/dog-bowl.png') ;?>" />
          <h3>Welcome To My <span class="orange">Life</span></h3>
          <img src="<?php echo get_theme_file_uri('./images/tennis-ball.png') ;?>" width="40" height="40"/>
        </div>
      </div>
    </header>

    <!--PRODUCTS SECTION-->
    <section> 
      <div class="image-wrapper"> 
        <img src="<?php echo get_theme_file_uri('./images/product-image2.JPG'); ?>" width="450" height="600"/>
      </div>

      <div class="text-wrapper">
        <h4 class="section-intro">I'm a funny little <span class="orange">frenchie</span></h4>
        <div class="subtext">
          <figure></figure> 
          <p>and just like any other dog, I love <span class="orange">everything</span>! <br>
          although, not everything agrees with me<br>
          because our kind is a little <span class="orange">sensitive</span><br>
          my parents are extra careful<br>
          with the food I <span class="orange">eat</span> and the toys I <span class="orange">play</span> with</p> 
          <figure></figure>
        </div>
        <h4 class="section-outro">Let me show you my <span class="orange">favorite</span> things</h4>
        <div class="rectangle-button">
          <a href="<?php echo site_url('/products') ?>" class="products-button">VIEW THE PRODUCTS I LOVE</a>
        </div>  
     </div> 
    </section>

    <!--TRAINING SECTION-->
    <section id="training-container">
      <div class="image-wrapper">
        <img src="<?php echo get_theme_file_uri('./images/Training-image1.png') ;?>" width="450" height="600"/>
      </div>

      <div class="text-wrapper" id="training-text-wrapper">
        <h4 class="section-intro">Did I mention that I also do <span class="orange">cool</span> things?<br></h4> 
        <div class="subtext">
          <figure></figure>
          <p>I <span class="orange">model</span>, I'm <span class="orange">house trained</span>, <br>
            and I can show off some awesome <span class="orange">tricks!</span></p>
          <figure></figure>
          </div>
        <h4 class="section-outro">Check out how I <span class="orange">learned</span> those things</h4>
        <div class="rectangle-button" >
          <a href="<?php echo site_url('/training') ?>">VIEW TRAINING TIPS</a>
        </div>
      </div>
    </section>

    <!--STORIES SECTION-->
    <section id="stories-container">
      <div class="image-wrapper">
        <img src="<?php echo get_theme_file_uri('./images/adoption-image1.JPG') ;?>" width="450" height="600"/>
      </div>

      <div class="text-wrapper" >
        <h4 class="section-intro">And the best part is...</h4>
        <div class="subtext" id="stories-subtext">
          <figure></figure>
          <p>I was up for adoption and I found <br>
          my new <span class="orange">family!</span></p>
          <figure></figure>
        </div>
    
        <h4 class="section-outro"">Here's <span class="orange">my story</span></h4>
        <div class="rectangle-button">
          <a href="<?php echo site_url('/adoption') ?>" >VIEW ADOPTION STORY</a>
        </div>
      </div>
    </section>

    <!--CTA BUTTONS-->
    <section class="CTA-container">
      <div class="CTA-buttons">
        <div class="square-button">
          <a href="<?php echo site_url('/products') ?>" >
            <h3>Products<br>I Love</h3>
          </a>
        </div>

        <div class="square-button">
          <a href="<?php echo site_url('/training') ?>" >
            <h3>Training<br>Tips</h3>
          </a>
        </div>
  
        <div class="square-button" >
          <a href="<?php echo site_url('/adoption') ?>">
            <h3>My<br>Stories</h3>
          </a>
        </div>
      </div>
    </section>

    <!--SOCIAL SECTION-->
    <section class="social-container">
      <div>
        <h3>Don't forget to show some <span class="orange">love</span><br> to my adventures on
          <a href="https://www.facebook.com/lifeofmontythefrenchie" target="_blank" text-decoration="none">
            <span class="orange">facebook</span></a> and <a href="https://www.instagram.com/lifeof_monty/"
            target="_blank"><span class="orange">instagram</span>
          </a>!
        </h3>
      </div>

      <div class="instagram-feed">
        <embed width="1200" height="300"/>
        <?php echo do_shortcode('[enjoyinstagram_mb]')?>
      </div>
    </section>
<?php get_footer(); ?>

