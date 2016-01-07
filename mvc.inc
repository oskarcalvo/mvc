<?php

	require 'src/classloaderfactory.class.php';
	use \mvcLoaderFactory\mvcLoaderFactory;

/**
 * Helpers functions
 */
function _helper_mvc_print_page($arg1, $arg2){

	$object = new mvcLoaderFactory($arg1);

  $newobject = $object->build();  
  return $newobject->index();
}
