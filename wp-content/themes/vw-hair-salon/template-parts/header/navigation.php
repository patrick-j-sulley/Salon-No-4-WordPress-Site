<?php
  $vw_hair_salon_search_hide_show = get_theme_mod( 'vw_hair_salon_search_hide_show' );
  if ( 'Disable' == $vw_hair_salon_search_hide_show ) {
   $colmd = 'col-lg-9 col-md-9';
  } else { 
   $colmd = 'col-lg-8 col-md-6 col-3';
  } 
?>  
<div class="menubar header <?php if( get_theme_mod( 'vw_hair_salon_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row bg-home">
      <div class="<?php echo esc_html( $colmd ); ?>">
        <div class="toggle-nav mobile-menu">
          <button onclick="menu_openNav()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-hair-salon'); ?></span></button>
        </div>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-hair-salon' ); ?>">
            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="menu_closeNav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-hair-salon'); ?></span></a>
            <?php 
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) ); 
            ?>
          </nav>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 phone">
        <?php if ( get_theme_mod('vw_hair_salon_phone_no','') != "" ) {?>
          <i class="fas fa-phone-volume"></i><span><?php echo esc_html( get_theme_mod('vw_hair_salon_phone_no','')); ?></span>
        <?php }?>
      </div>
      <?php if ( 'Disable' != $vw_hair_salon_search_hide_show ) {?>
        <div class="search-box col-lg-1 col-md-2 col-3">
          <span><a href="#"><i class="fas fa-search"></i></a></span>
        </div>
      <?php } ?>
    </div>
    <div class="serach_outer">
      <div class="closepop"><a href="#"><i class="far fa-window-close"></i></a></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>