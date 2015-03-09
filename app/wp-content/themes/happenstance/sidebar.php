<?php
/**
 * The sidebar template file.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/
?>
<aside id="sidebar">
    <?php if ( !is_page_template('template-landing-page.php') ) { ?>
    <div class="menu-box-wrapper">
    <div class="menu-box">
    <?php wp_nav_menu( array( 'menu_id'=>'nav', 'theme_location'=>'main-navigation' ) ); ?>
    </div>
    </div>
<?php } ?>
<?php if ( 1 ) : else : ?>
<?php endif; ?>
    <div id='online-reg'>Запись онлайн</div>
</aside> <!-- end of sidebar -->