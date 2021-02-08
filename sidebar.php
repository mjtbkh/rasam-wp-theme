<aside class="col-xl-3 col-lg-2 col-md-3 col-sm-10 p-4 offset-1">
  <?php wp_meta(); ?>
  <div>
    <div id="avatar"><?php echo get_avatar( $current_user->ID, 98 ); ?></div>
      <h3><?php echo get_the_author_meta( 'display_name', $current_user->ID ); ?></h3>
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
