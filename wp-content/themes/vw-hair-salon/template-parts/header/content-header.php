<?php if( get_theme_mod('vw_hair_salon_topbar_hide_show',true) != ''){ ?>
  <div class="extra-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 email">
          <?php if ( get_theme_mod('vw_hair_salon_email_address','') != "" ) {?>
            <i class="fas fa-envelope"></i><span><?php echo esc_html( get_theme_mod('vw_hair_salon_email_address','') ); ?></span>
          <?php }?>
        </div>
        <div class="col-lg-6 col-md-6 booking-btn">
          <?php if ( get_theme_mod('vw_hair_salon_booking','') != "" ) {?>
            <a href="<?php echo esc_html( get_theme_mod('vw_hair_salon_booking','') ); ?>"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_theme_mod('vw_hair_salon_booking_text','') ); ?></a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
<?php }?>
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="logo col-lg-3 col-md-3">
        <?php if ( has_custom_logo() ) : ?>
          <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
          ?>
          <p class="site-description">
            <?php echo $description; ?>
          </p>
        <?php endif; ?>
      </div>
      <div class="col-lg-3 col-md-3 topbar-content">
        <div class="row">
          <?php if ( get_theme_mod('vw_hair_salon_location_text','') != "" ) {?>
            <div class="col-lg-2 col-md-4 col-3 p-0">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="col-lg-10 col-md-8 col-9 contents">
              <?php if ( get_theme_mod('vw_hair_salon_location_text','') != "" ) {?>
                <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_hair_salon_location_text','') ); ?></p>
              <?php }?>
              <?php if ( get_theme_mod('vw_hair_salon_address','') != "" ) {?>
                <p><?php echo esc_html( get_theme_mod('vw_hair_salon_address','') ); ?></p>
              <?php }?>
            </div>
          <?php }?>
        </div>
      </div>          
      <div class="col-lg-3 col-md-3">
        <div class="row">
          <?php if ( get_theme_mod('vw_hair_salon_day','') != "" ) {?>
            <div class="col-lg-2 col-md-4 col-3 p-0">
              <i class="far fa-clock"></i>
            </div>
            <div class="col-lg-10 col-md-8 col-9 contents">
              <?php if ( get_theme_mod('vw_hair_salon_day','') != "" ) {?>
                <p class="bold-font"><?php echo esc_html( get_theme_mod('vw_hair_salon_day','')); ?></p>
              <?php }?>
              <?php if ( get_theme_mod('vw_hair_salon_time','') != "" ) {?>
                <p><?php echo esc_html( get_theme_mod('vw_hair_salon_time','')); ?></p>
              <?php }?>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="socialbox">
          <?php dynamic_sidebar('social-icon') ?>
        </div>
      </div> 
    </div>
  </div>
</div>