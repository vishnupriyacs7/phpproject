<?php
//use require or include method
require_once 'File.php'; 
require_once 'File2.php'; 

use MyNamespace\File1; 
use MyNamespace\File2;

File1\myFunction(); // Output: Hello from File1!
$object1 = new File1\MyClass();
$object1->sayHello(); // Output: Hello from MyClass in File1!

echo "<br />";

File2\myFunction(); // Output: Hello from File2!
$object2 = new File2\MyClass();
$object2->sayHello(); // Output: Hello from MyClass in File2!
?>