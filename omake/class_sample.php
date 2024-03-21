<?php
class MyName {
    private $name;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
}

class MyProfile extends MyName{
    private $age;

    function setAge($age){
        $this->age = $age;
    }

    function getAge(){
        return $this->age;
    }
}

$myname = new MyName();
$myname->setName("Bob");
print $myname->getName() . "\n";

$myprofile = new MyProfile();
$myprofile->setName("Jack");
$myprofile->setAge(20);
print $myprofile->getName() . "\n";
print $myprofile->getAge() . "\n";
?>