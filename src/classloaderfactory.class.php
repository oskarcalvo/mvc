<?php

namespace mvcLoaderFactory;

class mvcLoaderFactory {
	
	public $class_name;
	private $base_dir = $_SERVER['DOCUMENT_ROOT'];

	function __construct($class_name){

			spl_autoload_register ( function ($class_name){

			$file = $base_dir . 'libraries/mvc/src/' . $class_name . '/controller' . $class_name .'.php';
	    if (file_exists($file)) {
	        require $file;
	    }
  	}, TRUE);
	}
}