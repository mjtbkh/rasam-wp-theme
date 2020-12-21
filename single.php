<?php get_header( ) ?>

      <div class="container p-3">
        <div class="row">

          <main class="row col-12">
          <?php if(have_posts(  )):
                  while(have_posts(  )):
                    the_post(  );
          ?>

            <article id="blog-full">
              
              <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12">
                  <?php the_title( '<h1 class="post-title">', '</h1>' ) ?>
                <p>
                  <span><i id="post-info" class="fa fa-pen"></i> <?php the_author( ); ?></span>
                  <span><i id="post-info" class="fa fa-calendar"></i> <?php echo get_the_date( 'Y/m/d' ); ?></span>
                  <span><i id="post-info" class="fa fa-comments"></i> <?php echo get_comment_count( get_the_ID(  ) )['approved']; ?></span>
                  <span><i id="post-info" class="fa fa-eye"></i> <?php echo('12') ?></span>
                </p>
                </div>
                <div class="col-xl-3 col-lg-3-col-sm12 col-xs-12">
                  <?php if(has_post_thumbnail( )):
                        the_post_thumbnail( 'medium' );
                      endif; 
                ?>
                </div>
                
                
              </div>
              <hr>
              <div class="row col-12">
                <?php the_content( ); ?>
              </div>
              
              

            </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="row">
              <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                    comments_template();
                    endif;
            ?>
            </div>
            
          </main>
        </div>
      </div>

<?php get_footer( ) ?>