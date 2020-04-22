<?php
/**
 * The Header for our theme.
 *
 *
 * @package Life of Monty
 */
?>

<!DOCTYPE html>

<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119129309-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119129309-4');
    </script>

        <?php wp_head(); ?>  

  </head>

  <body>
    <!-------------side menu-------------->

    <nav>
      <div class="nav-wrapper">
       <!--nav logo-->
        <div class="logo">
          <?php the_custom_logo(); ?>
          <a href="/" rel="home">
            <img class="mobile-logo" src="/wp-content/uploads/2020/02/mobile-logo.svg"  width="70" height="35"/>
          </a>       
        </div>
       <!--nav hamburger menu-->
        <div class="menu-container">
          <img class="desktop-menu" src="/wp-content/uploads/2020/02/Menu.svg"  width="35" height="35"/>
          <button onclick="myFunction()">
          <img class="mobile-menu" src="/wp-content/uploads/2020/02/Menu-mobile.svg"  width="35" height="35"/>
          <script>
            function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            }
          </script>
         </button>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
          <div class="mobile-menu-container" id="myDropdown">
            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );?>
              
            <div class="mobile-social-icons">
              <a href="https://www.facebook.com/lifeofmontythefrenchie" target="_blank">
                  <img id="facebook" src="/wp-content/uploads/2020/02/facebook.svg"/> 
              </a>
              <a href="https://www.instagram.com/lifeof_monty/" target="_blank">
                  <img id="instagram" src="/wp-content/uploads/2020/02/instagram.svg" />
              </a>
              <a href="mailto:lifeofmonty@yahoo.com" target="_blank">
                <img id="mail" src="/wp-content/uploads/2020/02/Mail.svg" />
              </a>
            </div>
          </div>
       </div>    
      
       <!--nav social-->
       <div class="social-icons">
          <a href="https://www.facebook.com/lifeofmontythefrenchie" target="_blank">
            <img src="/wp-content/uploads/2020/02/facebook.svg"/> 
          </a>
          <a href="https://www.instagram.com/lifeof_monty/" target="_blank">
            <img src="/wp-content/uploads/2020/02/instagram.svg" />
          </a>
          <a href="mailto:lifeofmonty@yahoo.com" target="_blank">
            <img src="/wp-content/uploads/2020/02/Mail.svg" />
          </a>
        </div>
      </div>
    </nav>
<main>