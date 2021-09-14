<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open( ); ?>
  <div id="container">
      <!-- header area -->
      <header class="main-header">
          <div class="custom-logo">
            <?php
        if (get_custom_logo() ){
            theme_prefix_the_custom_logo();
        } else{
            echo '<h1>' . get_bloginfo('name') . '</h1>';
            echo '<h2>' . get_bloginfo('description') . '</h2>'; 
        }

            ?>
            </div>
            <div class="search">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                     <input type="search" class="search-field"
                         placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                         value="<?php echo get_search_query() ?>" name="s"
                         title="<?php echo esc_attr_x( 'Search for...', 'label' ) ?>" />
                     <input type="submit" class="search-submit"
                         value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
            </div>
            <div class="main-nav">
                <?php wp_nav_menu(); ?>
        
            </div>
        </header>

        <!-- banner/slider area -->
     <section class="banner">
                  <?php if ( is_active_sidebar( 'home_banner_slider' ) ) : ?>
                  	<?php dynamic_sidebar( 'home_banner_slider' ); ?>
                        <?php endif; ?>

        </section> 

        <!-- main content area -->
            <section class="content-holder">
            <article class="content">
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <h2><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h2>
                    <?php
                      if ( has_post_thumbnail() ){
                          the_post_thumbnail();
                      }
                      the_excerpt();
                      ?>

                      <?php endwhile;
                      else:
                        esc_html_e( 'sorry no pages matched your criteria', 'textdomain');
                      endif;
                      ?>
            </article>    
            <aside class="sidebar">

            </aside>
        </section>

        <!-- footer area -->
        <footer class="main footer">
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
            <aside class="footer-box"></aside>
        </footer>
        <div class="copywrite">
        </div> 
  </div>
</body>
</html>