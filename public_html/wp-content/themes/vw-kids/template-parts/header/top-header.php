<?php
/**
 * The template part for top header
 *
 * @package VW Kids 
 * @subpackage vw_kids
 * @since VW Kids 1.0
 */
?>

<?php if( get_theme_mod( 'vw_kids_discount_text') != '' || get_theme_mod( 'vw_kids_call') != '' || get_theme_mod( 'vw_kids_email') != '') { ?>

  <?php if( get_theme_mod('vw_kids_topbar_hide_show',true) != ''){ ?>
    <div id="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <?php if( get_theme_mod( 'vw_kids_discount_text') != '') { ?>
              <span><?php echo esc_html(get_theme_mod('vw_kids_discount_text',''));?></span>
            <?php }?>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row m-0">
              <div class="call col-lg-5 col-md-5">
                <?php if( get_theme_mod('vw_kids_call') != '' ){ ?>
                  <i class="fas fa-phone"></i><span><?php echo esc_html(get_theme_mod('vw_kids_call',''));?></span>
                <?php }?>            
              </div>
              <div class="email col-lg-7 col-md-7">            
                <?php if( get_theme_mod( 'vw_kids_email') != ''){ ?>
                    <i class="far fa-envelope"></i><span><?php echo esc_html(get_theme_mod('vw_kids_email',''));?></span>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }?>

<?php } ?>