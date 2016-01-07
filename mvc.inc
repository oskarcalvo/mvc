<?php

	require 'src/classloaderfactory.class.php';
	use \mvcLoaderFactory\mvcLoaderFactory;

/**
 * Helpers functions
 * @param $arg1 is the name of the class.
 * @param $arg2 is the name of the method.
 */
function _helper_mvc_print_page($arg1, $arg2){

	$object = new mvcLoaderFactory($arg1);

  $newobject = $object->build();  
  return $arg2 . '  ' . $newobject->{$arg2}();
}
