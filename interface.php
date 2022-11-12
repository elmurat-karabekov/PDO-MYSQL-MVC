<?php

interface MyInterface
{
    //interface constants can not be overwritten in implementing class
    const MY_CONSTANT = 1;
    public function method1();
    public function method2();
}

abstract class MyClass implements MyInterface
{
    public function method2(){

    }
}

class MyClass2 extends MyClass
{
    public function method1()
    {
        
    }
}

$myClass = new MyClass();
