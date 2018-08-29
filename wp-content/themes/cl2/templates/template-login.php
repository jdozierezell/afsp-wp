<?php
/**
 * Template Name: Login Template
 */
?>
<?php
$args = array(
  'redirect' => home_url(),
  'label_username' => __( 'Username' ), 
  'id_username' => 'user',
  'id_password' => 'pass',
  'remember' => true
); 

$login = '';
$action = '';
if (array_key_exists('login', $_GET)) :
  $login = $_GET['login'];
elseif (array_key_exists('action', $_GET)) :
  $action = $_GET['action'];
endif;

// empty
// false
// lostpassword

if (have_posts()) : while (have_posts()) : the_post();
    $image = get_field('lf_background_image'); ?>
    <div class="login-wrapper" style="background-image:url(<?= $image['url'] ?>);">
      <div class="login-box s-col-10 m-col-8 l-col-6">
        <div class="col-11">
          <p><?= $login ?></p>
          <h1 id="login-header">Welcome to ChapterLand</h1>
          <?php the_field('lf_welcome'); ?>
          <?php if ($action !== 'lostpassword') :
            wp_login_form($args);
            elseif ($action === 'lostpassword') : ?>
              <p>Enter your username or email to reset your password.</p>
              <form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
                <div class="username">
                  <label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
                  <input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
                </div>
                <div class="login_fields">
                  <?php do_action('login_form', 'resetpass'); ?>
                  <input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="user-submit" tabindex="1002" />
                  <?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
                  <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?reset=true" />
                  <input type="hidden" name="user-cookie" value="1" />
                </div>
              </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <script>
      window.fitText(document.getElementById("login-header"), 1.1675, {minFontSize: '24px'});
    </script>
  <?php endwhile; 
endif; ?>