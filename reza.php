<?php
/* OBJECT ORIENTED PROGRAMMING */


//Class declartion and object instance creating
 class helloWorld{
 	$instance= new helloWorld();
 } 



class person{  //declaring class named 'person'
	public $age;
}

$firstPerson=new person();   //creating an object instance of class person
$firstPerson->age=21; // asigning a value to the instance 'firstPerson'
$secondPerson=new person();  //   sign '->' is called object operator is used to access th3e property of an object. 
secondPerson->age=19;

var_dump(firstPerson->age);
var_dump(secondPerson->age);


//method (function declared inside a  class body)

class Person{
	
	public $age;
	public function getAge()
		{
			return $this->age;
		}
}

$person = new Person();
$person->age = 32;
$anotherPerson = new Person();
$anotherPerson->age = 45;
var_dump($person->getAge());
var_dump($anotherPerson->getAge());

//non static context
class Person{
	
public $age;
public function getAge()
	{
		return $this->age;
	}
}

$person = new Person();
$person->age = 32;
$anotherPerson = new Person();
$anotherPerson->age = 45;
var_dump($person->getAge());
var_dump($anotherPerson->getAge());

//static context

class Person{
	public static $count;
	public static function getCount()
	{
		return self::$count;  // '::' this called sscope resololutin operator
	}
}

Person::$count = 34;
var_dump(Person::$count);
$person = new Person();
var_dump($person->getCount());
Person::$count = 23;
var_dump(Person::$count);
var_dump($person->getCount());
$anotherPerson = new Person();
var_dump($anotherPerson->getCount());





?>
?>