<?php
include_once 'routerExt.php';
include_once 'routerIntern.class.php';

class router extends routerExt{
  static function run($routfile, $prefix, $router){
    routerIntern::run($routfile, $prefix, $router);
  }
  static function runpackage($packageName, $prefix, $router) {
    routerIntern::runpackage($packageName, $prefix, $router);
  }
}
 ?>
