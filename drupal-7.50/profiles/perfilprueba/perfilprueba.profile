<?php

  function perfilprueba_form_install_configure_form_alter (&$form, $form_state){
    $form['site_information']['site_name']['#default_vallue'] = $_SERVER['SERVER_NAME'];
  }
?>
