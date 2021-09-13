<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            </div>
            <div class="main-nav">
            </div>
        </header>

        <!-- banner/slider area -->
     <section class="banner">
        </section> 

        <!-- main content area -->
            <section class="content-holder">
            <article class="content">
            </article>    
            <article class="sidebar">
            </article>
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