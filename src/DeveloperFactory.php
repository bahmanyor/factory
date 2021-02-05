<?php


namespace APP\src;


class DeveloperFactory {
    public function createDeveloper($type){
        switch ($type){
            case JavaDeveloper::class:
               return new JavaDeveloper();
            case GoDeveloper::class:
               return new GoDeveloper();
            case KotlinDeveloper::class:
               return new KotlinDeveloper();
            default: throw new \Exception("developer" . $type . "not found");
        }
    }
}