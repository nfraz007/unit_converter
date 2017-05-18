# Unit Converter
An easy to use PHP unit conversion library.

Converter allows you to convert any unit to any other compatible unit type. It has no external dependencies, simply include the library in your project and you're away!

# Documentation
Full documentation & demos can be found at: https://nfraz007.github.io/UnitConverter/

Convertor can handle a wide range of unit types including:

* Length
* Area
* Volume
* Mass
* Speed
* Time
* Plane Angle
* Pressure
* Energy
* Storage
* Frequency

See The Documentation for full list of units in Convertor.

If you need aditional unit types, then it is easy to add your own.

# Setup
Setting up Convertor could not be simpler.

Include the library is very easy

```
require "UnitConverter.php";
```

## Simple Example
Once you have included the UnitConverter.php library.
```
$obj = new UnitConverter();

echo $obj->convert(2,"km","ft"); //returns converted value

2 Km = 6561.6797900262 Ft
```
