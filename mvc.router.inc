<?php 

/**
 * This is a routing file to add the hook_menu()
 */
function mvc_menu(){

  $items['mvc'] = array(
    'page callback' => '_helper_mvc_print_page',
    'page arguments' => array(1,2),
    'access callback' => TRUE,
    'file' => 'mvc.inc',     
    'file path' => drupal_get_path('module', 'mvc'),
  );
  return $items;
}
