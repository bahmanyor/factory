<?php


namespace APP\src;



class Main {
    public function __construct() {

    }

    public function main(){
          $factory = new DeveloperFactory();
          $developer = $factory->createDeveloper(JavaDeveloper::class);
          $developer->writeCode();
     }
}