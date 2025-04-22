<?php
# This is a simple PHP class example
class Student{
    public $name = "John Doe";
    function dekhaw(){
        return "Hello World!";
    }
}
$obj = new Student();
echo $obj->name;
echo $obj->dekhaw();
echo "<br>";
#Access Modifiers
Class Cow{
    private $name;
    protected $age;
    function setName($name, $age){
        $this->name = $name;
        $this->age =$age;
    }
    function getName(){
        return $this->name ."<br>Age: ". $this->age;
    }
}
$box = new Cow();
$box->setName("Kalu",12);
echo $box->getName();

#Inheritance
class Idcard{
    protected $name;
    protected $roll;
    function __construct($name, $roll){
        $this->name = $name;
        $this->roll = $roll;
        echo "Ami coltesi";
    }
}
class Chatro extends Idcard{
    function __construct($name){
       # $this->name = $name;
        parent::__construct($name,45654);
    }
    function showInfo(){
        return "<br>The name is ".$this->name ."<br> Roll: ". $this ->roll;
    }
}
$box2 = new Chatro("Tarak");
echo $box2->showInfo();
echo "<br>";
#Polymerprism
#abstructed class
abstract class Boss{
    abstract public function attitude();
    function Bolo(){
        return "Ami boss Abstract class";
    }
}
class Employ extends Boss{
    function attitude(){
        return "Attitude level Medium";
    }
}
$box3 = new Employ();
echo $box3->attitude();
#Interface
interface Template1{
    function name();
    function salary();
}
interface Template2{
    function id();
    function attendence();
}
class Corporate implements Template1, Template2{
    function name(){
        echo "Ami Employ Name";
    }
    function salary(){
        echo "Ami Employ salary";
    }
    function id(){
        echo "Ami Employ id";
    }
    function attendence(){
        echo "Ami Employ attendence";
    }
}
?>