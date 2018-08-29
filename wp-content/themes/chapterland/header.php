<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package chapterLand
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60994840-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'chapterland' ); ?></a>
    <header class="container" id="header">
    <?php
        if(isset($_GET['login'])){ // this is set by a function called chapterland_login_fail in widgets/login.php ?>
        <div class="alarum">
            <h3>Oh, no. Your login failed. Please <a data-dialog-try="tryDialog" class="trigger" href="#">try again</a> or <a href="/wp-login.php?action=lostpassword" title="Reset Password">reset your password</a>.</h3>
        </div>
        <div id="tryDialog" class="dialog">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <?php dynamic_sidebar( 'upper_right_corner' ); ?><button class="action btn-close" data-dialog-close><i class="fa fa-times-circle"></i></button></div>
        </div>
        <div id="resetDialog" class="dialog">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
                
<form name="lostpasswordform" id="lostpasswordform" action="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" method="post">
	<p>
		<label for="user_login">Username or E-mail:<br>
		<input type="text" name="user_login" id="user_login" class="input" value="" size="20"></label>
	</p>
		<input type="hidden" name="redirect_to" value="">
	<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Get New Password"></p>
</form>                
                
                
                <button class="action" data-dialog-close>Close</button></div>
        </div>
        <?php }else{
            // All is well
        }
    ?> 
        <div class="login-wrap">
            <?php if( is_user_logged_in() ) { ?>
            <a class="button" style="background-color: #fdb813; color: #00619a" href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout of Chapterland</a>
            <?php } else { ?>
            <button data-dialog-login="loginDialog" class="trigger">Login to Chapterland</button>
            <?php } ?>
        </div>
        <div id="loginDialog" class="dialog">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <?php dynamic_sidebar( 'upper_right_corner' ); ?><i class="icon-close-circled"></i><button class="action btn-close" data-dialog-close><i class="fa fa-times-circle"></i></button></div>
        </div>
        <section class="branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">ChapterLand</a>
            <img class="brandLogo" src="https://chapterland.org/wp-content/uploads/sites/10/2017/09/StackedLogoColor.png" alt="">
        </section>
        <div class="search">
            <?php get_search_form(); ?>
        </div>
    </header>
    <div class="wide">
        <div class="container">
          <nav>
<!--             <a href="#nav" title="Show navigation"><i class="fa fa-caret-square-o-down"></i>&nbsp;&nbsp;Open Menu</a>
            <a href="#" title="Hide navigation"><i class="fa fa-caret-square-o-up"></i>&nbsp;&nbsp;Close Menu</a> -->
			      <?php callMainNav(); // secret sauce located in library/navigation.php ?>
          </nav>
        </div>
    </div>