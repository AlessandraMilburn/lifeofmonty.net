<div id="myFilterContainer">
        <button><h6><a class="filter active" onclick="filterSelection('all')">View All</a></h5></button>
        <button><h6><a class="filter" onclick="filterSelection('food')">Food</a></h5></button>
        <button><h6><a class="filter" onclick="filterSelection('toys')">Toys</a></h5></button>
        <button><h6><a class="filter" onclick="filterSelection('grooming')">Grooming</a></h5></button>
        <button><h6><a class="filter" onclick="filterSelection('accessories')">Accessories</a></h5></button>
      </div>


    <!--posts preview-->
    <section class="postsContainer">

        <?php 
          // food

          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'food',
            'posts_per_page' => 9,
          );
          
          $arr_posts = new WP_Query( $args );
        
          if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" class="filterArt food">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div>
                      <h5><?php the_title(); ?></h5>
                    </div>
                  </a>
                </article>

                <?php
            endwhile;
          endif;

          // toys
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'toys',
            'posts_per_page' => 9,
          );
          
          $arr_posts = new WP_Query( $args );
        
          if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" class="filterArt toys">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div>
                      <h5><?php the_title(); ?></h5>
                    </div>
                  </a>
                </article>

                <?php
            endwhile;
          endif;

          // grooming
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'grooming',
            'posts_per_page' => 9,
          );
          
          $arr_posts = new WP_Query( $args );
        
          if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" class="filterArt grooming">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div>
                      <h5><?php the_title(); ?></h5>
                    </div>
                  </a>
                </article>

                <?php
            endwhile;
          endif;

          // accessories
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'accessories',
            'posts_per_page' => 9,
          );
          
          $arr_posts = new WP_Query( $args );
        
          if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" class="filterArt accessories">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div>
                      <h5><?php the_title(); ?></h5>
                    </div>
                  </a>
                </article>

                <?php
            endwhile;
          endif;
        ?>

    </section>
    <!-----Filter Script----->    
    <script>

      //filter view
      filterSelection("all")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterArt");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
        }
      }

      //adds class

      function AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
      }
      
      //removes class
      function RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
          }
        }
        element.className = arr1.join(" ");
      }
      
      // Add active class to the current button (highlight it)
      var filterContainer = document.getElementById("myFilterContainer");
      var filters = filterContainer.getElementsByClassName("filter");
      for (var i = 0; i < filters.length; i++) {
        filters[i].addEventListener("click", function(){
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
   </script>

<?php
      class Item {
        public $image;
        public $title;
        public $purpose;
        public $pros;
        public $cons;
        public $rating;
        public $reviewlink;
        public $shoplink;
      } 

      $product = newItem();
      $product->image = '/wp-content/uploads/2020/02/mobile-banner.png';
      $product->title = 'Ball';
      $product->purpose = 'Entertainment';
      $product->link = 'http://lifeofmonty.com';
      $productreviews[] = $product;

      foreach ($productreviews as $product) {
        echo "<li>";
        echo "<img src='{$product->image}' alt='{$picture->title}'/>";
        echo "data-title='{$product->title}'";
        echo "data-description='{$product->purpose}' alt='{$product->title}'";
        echo "</li>";
      }




    ?>

