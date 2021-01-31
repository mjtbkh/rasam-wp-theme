<div class="row mx-auto">
    <main>
        <article class="container" id="blog-full">
            <div class="row" style="height: auto; width: 100%; margin-bottom: 20px">
                <div class="col">
                  <?php the_title( '<h1 class="post-title">', '</h1>' ) ?>
                  <?php if( !is_page()): ?>
                  <p>
                    <span><i id="post-info" class="fa fa-pen"></i> <?php the_author( ); ?></span>
                    <span><i id="post-info" class="fa fa-calendar"></i> <?php echo get_the_date( 'Y/m/d' ); ?></span>
                    <span><i id="post-info" class="fa fa-comments"></i> <?php echo get_comment_count( get_the_ID(  ) )['approved']; ?></span>
                    <span><i id="post-info" class="fa fa-eye"></i> <?php echo('12') ?></span>
                  </p>
                  <p>
                    <span>دسته بندی:</span><?php the_category( '، '); ?>
                  </p>
                  <p>
                    <?php the_tags( '<span>برچسب ها:</span>', '، ' ); ?>
                  </p>
                  <?php endif; ?>
                </div>
                  <?php if(has_post_thumbnail( )): ?>
                  <div class="col" style="position: relative; overflow: hidden; height: 15rem">
                        <?php the_post_thumbnail( 'medium' ); ?>
                  </div>
                  <?php endif; ?>
            </div>

            <hr>

            <div class="row">
                <?php the_content( ); ?>
            </div>
        </article>

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