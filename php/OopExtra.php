<?php
#Trait
trait A{
    function fun1(){
        echo "Ami Fun1";
    }
} 
trait B{
    function fun1(){
        echo "Ami Fun2";
    }
}
class C{
    use A, B{
        A::fun1 insteadOf B;
        B::fun1 as fun2;
    }
    
    function fun3(){
        echo "Ami Fun3";
    }
}
class D extends C{
    function fun4(){
        echo "Ami Fun4";
    }
}
$obj = new C();
$obj->fun1();
$obj -> fun2();
echo "<br>";
$obj1 = new D();
$obj1 -> fun1();

#Static Keyword
class Tarak{
    public static $partner;
    public static function setLove($partner){
        self::$partner =$partner;
    }
    public static function viewLife(){
        return "<br>Her name is: ". self::$partner;
    }
}
define("herName","Asma");
Tarak::setLove(herName);
echo Tarak::viewLife();
?>