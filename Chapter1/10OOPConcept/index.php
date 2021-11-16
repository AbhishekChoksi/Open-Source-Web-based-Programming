<?php
/*
• Classes: which are the "blueprints" for an object and are the actual code that defines the properties and methods.
• Objects: which are running instances of a class and contain all the internal data and state information needed for your application to function.
• Encapsulation: which is the capability of an object to protect access to its internal data
• Inheritance: which is the ability to define a class of one kind as being a sub-type of a different kind of class (much the same way a square is a kind of rectangle).
*/

/* // How to create class
class Car {
    // The code
}
*/
/* // How to add properties to a class?
class Car
{
    public $comp;
    public $color = 'red';
    public $hasSunRoof = true;
}
*/
/*
                How to create objects from a class?
-----------------------------------------------------------------
• We can create several objects from the same class, with each object having its own set of properties.
    $bmw = new Car (); 
    $mercedes = new Car ();
• We created the object $bmw from the class Car with the new keyword.
• The process of creating an object is also known as instantiation.
*/
/*
                How to get an object's properties?
-----------------------------------------------------------------
echo $bmw -> color;
echo $mercedes -> color;
• In order to get a property, we write the object name, and then dash greater than (->), and then the property name.
• Note that the property name does not start with the $ sign; only the object name starts with a $.
*/
/*
                How to set the object's properties?
-----------------------------------------------------------------
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
• Get the object's properties
    echo $bmw -> color
*/

//Create class
class Car
{
    public $comp;
    public $color = 'red';
    public $hasSunRoof = true;
}

// Create objects from a class
$bmw = new Car (); 
$mercedes = new Car ();

// Get an object's properties
echo $bmw -> color . '<br/>';
echo $mercedes -> color . '<br/>';

// Set the object's properties
$bmw -> color = 'blue';
$bmw -> comp = 'BMW';

echo $bmw -> color . '<br/>';
echo $bmw -> comp . '<br/>';
?>