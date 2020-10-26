<?php
namespace han\test;
use ReflectionClass;
use ReflectionMethod;
class A {
    public function __construct() {
        echo __CLASS__;
    }

    public function __init() {
        echo 'aaaaaa';
    }
    
}

class B extends A {
    public function __construct() {
        echo 'class B init';
        parent::__construct();
    }
}

$b = new B();
$c = new \ReflectionClass(B::class);
//var_dump($c);
var_dump($c->getMethods(ReflectionMethod::IS_PUBLIC));
$a = new A();

