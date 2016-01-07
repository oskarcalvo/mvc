<?php
namespace mvcLoaderFactory;
use Exception;
class mvcLoaderFactory {
	
	public $class_name;

	function __construct($class_name){
    $this->class_name = $class_name;
  }

  public function build(){

    $class = $this->class_name;


    try {
    spl_autoload_register(function ($class) {
      include DRUPAL_ROOT. '/sites/all/libraries/mvc/src/' . $class . '/controller.' . $class . '.class.php';
    });
    }catch( Exception $e){
      echo 'Excepción capturada: ',  $e->getMessage(), "\n"; 
    }

    if (class_exists($class)){
  
      return new $class();  
    }else {
      $message =  t('The class '. $class . ' don\'t exist');
      throw new \Exception ($message);
    }
	}
}
