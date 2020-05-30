<?php
//Author : Selim Reza Swadhin

 //Single line comment

/*Multiline 
comment*/


$name="selim";  //variables are case sensative
$Name="reza";
$Age=24;
$age=25;

//BOOLEANS

$ismarried=FALSE;
$isalive=TRUE;

//INTEGERS

$age=23;

//STRINGS

$doctor="the doctor";//double qoute 
$planet='Gallifrey'; //single quote


$doc=<<<DOC
Hello World
DOC;

$hello = array('abir' => 'dharmasur','tajul'=>'ramerkanda','shakil'=>'barishal' ); //array 

$list = ['a', 'z', 2, 10]; //some kinda list 

settype($age, string);

$a=2;
$b=3;
$sum=$a+$b+2; //sum of three integers

//Comparison Operator

$a == $b; // TRUE if value is same
$a === $b; // TRUE if value and type is same
$a != $b; // TRUE if values are not same even after type conversion.
$a <> $b; // TRUE if values are not same even after type conversion.
$a !== $b; // TRUE if value or type are not same.
$a < $b; // TRUE if $a is smaller than $b
$a > $b; // TRUE if $a is greater than$b
$a <= $b; // TRUE if $a is smaller than or equal to than$b
$a >= $b; // TRUE $a is greater than or equal to$b

//Incremental and Decremental operator
++$a //increments first then returns the value of $a
$a++ //first returns the value then increments  it.

--$a
$a-- //same


$a and $b     // TRUE 
$a or $b     // TRUE
$a xor $b   // TRUE if just one is true not both
!$a        // TRUE 
$a && $b  // TRUE 
$a || $b // TRUE 


$a = "Hello ";
$b = $a . "World!"; // we can add two strings with '.' operator.  result will be "Hello World!"

//conditional statement
$age=10;
if ($age){
	echo "You are an adult";
}elseif ($age==17) {
	echo "Just another year";
}else{
	echo "Get the fuck outta here";
}

//while loop
$i = 1;
while ($i <= 10) {
		echo $i++;
	}
echo "I am outside the loop";

# do while loop
$i = 0;
do {
	echo $i;
	}while ($i > 0);

#for loop
for ($i = 1; $i <= 10; $i++) {
		echo $i;
	}

#foreach loop
//only values
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
		echo $value;
	}

//with indexes 
$arr2 = array("a" => "abdullah", "b" => "bahar");
foreach($arr2 as $k => $v) {
		echo $k. "=". $v;
	}

#switch statement

switch ($i) {
    case 0:
    echo "i equals 0";
    break;

    case 1:
    echo "i equals 1";
	break;

	case 2:
	echo "i equals 2";
	break;

}

//use of BREAK statement to break out of any control structure

$array = ["a", "b", "c", "d"];

foreach($array as $val) {
	echo $val;
	
	if($val == "b") {
		break;
		}
}

//using CONTINUE to break out of current iteration of the loop

for ($i = 0; $i < 5; ++$i) {
	if ($i == 2) {
		continue;       //2 won't be printed loop will go to next iteration
	}
	print "$i\n";
}

//function declaration
function testFunc($name, $age) //thesetwo are called parameters 
{
	
}

testFunc("Abir", 5*4)//these two are called arguement

//built in Array functions
//couint elements
 $array=array(1,2,3);
 echo count(array);

//count elements of multidimentional array
 $items = array('fruits' =>array('orange','banana','apple') ,
 		        'veg'=>array('caret','potato','pea') );

 echo count($food,COUNT_RECURSIVE); //recursive mode counts 8 elements 
 //if an array contains a specific value
 $place = array('first' =>1 ,'second'=>2 );
 if (array_key_exists(second, $place)) {
		echo "the 'first' element is in the array";
 	}

//get array keys
 	$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

//returns true if an item is an array
$os = array("Mac", "NT", "Irix", "Linux");
	if (in_array("Irix", $os)) {
		echo "Got Irix";
	}
if (in_array("mac", $os)) {
		echo "Got mac";
	}

//removes and returns last element of an array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);

//adds an iotem at the end of an array
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//removes and returns first element of an array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

//adds an item at the first position of an array
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);

//interchanges keys and values of an array
$trans = array("a" => 1, "b" => 1, "c" => 2);
$trans = array_flip($trans);
print_r($trans);

//reverses the array
$input = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true); //keeps the 'key' and 'value' same
print_r($input);
print_r($reversed);
print_r($preserved);

//Merges two array and creats a new one 
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);  //have to see the result. 

//accepts random item from an array returns the keys of the selected items in another array

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

//searches an item in an array and returns the key(see more in the internet)
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array); // $key = 1;    

 					

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