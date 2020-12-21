<?php get_header( ) ?>

      <div class="container-fluid p-2">
        <div class="row">

          <aside class="col-xl-3 col-lg-2 col-md-3 col-sm-10 p-4 offset-1">
            <div>
              <div id="avatar"><?php echo get_avatar( $current_user->ID, 98 ); ?></div>
              <h3><?php echo get_author_name( $current_user->ID ); ?></h3>
              <p id="biography">
                <?php echo get_the_author_meta( 'description', $current_user->ID ); ?>
              </p>
            </div>
            <ul>
              <li id="facebook" class="fab fa-facebook fa-2x"></li>
              <li id="twitter" class="fab fa-twitter fa-2x"></li>
              <li id="instagram" class="fab fa-instagram fa-2x"></li>
              <li id="linkedin" class="fab fa-linkedin fa-2x"></li>
            </ul>
          </aside>
          
          <main class="row col-xl-9 col-lg-9 col-md-9 col-sm-10">
            <?php 
              if( have_posts() ):
                while(have_posts( )): ?>

                  <?php the_post(  );  ?>
                  <article class="col-xl-3 col-lg-3 col-md-3 col-sm-6 card">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'medium' );
                      }
                    ?>
                    <div class="card-body">
                      <div id="post-info-wrapper">
                        <h5 class="card-title">
                          <a href="#"><?php the_title( ); ?></a>
                        </h5>
                        <div><i id="post-info" class="fa fa-pen"></i> <?php  the_author( ); ?></div>
                          <div><i id="post-info" class="fas fa-clipboard"></i> <?php  the_category( ); ?></div>
                          <div><i id="post-info" class="fas fa-clock"></i> <?php echo get_the_date('Y/m/d'); ?></div>
                      </div>
                      <div class="card-text">
                        <hr>
                        <a href="<?php echo get_permalink( ); ?>" class="btn btn-success">ادامه مطلب</a>
                      </div>
                      
                    </div>
                  </article>
                  <?php endwhile; ?>
              <?php else: ?>
                <h3>هیچ مطلبی یافت نشد!</h3>    
              <?php endif; ?>
          </main>
        </div>
      </div>

<?php get_footer( ) ?>