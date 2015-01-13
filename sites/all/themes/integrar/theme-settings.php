

<?php
function integrar_form_system_theme_settings_alter(&$form, $form_state) {
  $form['social_facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook'),
    '#default_value' => theme_get_setting('social_facebook'),
    '#description'   => t(" "),
  );
  $form['social_twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter'),
    '#default_value' => theme_get_setting('social_twitter'),
    '#description'   => t(" "),
  );
/*
  $form['social_linkedin'] = array(
    '#type'          => 'textfield',
    '#title'         => t('LinkedIn'),
    '#default_value' => theme_get_setting(' '),
    '#description'   => t(" "),
  );
  */
}
?>