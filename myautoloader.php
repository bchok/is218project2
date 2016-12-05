<?php

  class MyAutoLoader{

    public static function loader($class){
      $filename = strtolower($class) . '.php';
      $file = 'code/' .$filename;
      if (!file_exists($file)){
        return false;
      }
      include $file;
    }
  }

 ?>
