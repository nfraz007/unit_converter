# Unit Converter
An easy to use PHP unit conversion library.

Converter allows you to convert any unit to any other compatible unit type. It has no external dependencies, simply include the library in your project and you're away!

# Documentation
Full documentation : [https://nfraz007.github.io/unit_converter/](https://nfraz007.github.io/unit_converter/)

Live Demo : [http://nazishfraz.co.nf/unit_converter](http://nazishfraz.co.nf/unit_converter)

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
# Convert a Unit
To convert a unit, create an instance of UnitConverter class. you can then call the convert() function on the UnitConverter object, passing three values as *number*, *from*, *to* which is

number : the integer/decimal value which is going to be converted

from : initial unit

to : final unit in which the number you want to convert

```
$obj = new UnitConverter();
echo $obj->convert(2, "km", "ft");
```
> 2 Km = 6561.6797900262 Ft

# Get list/perticular Unit data
You can get the list of unit data with just one function. The **getUnit()** function return all the unit data. if you want to see the perticular unit then pass the unit as a parameter to this function.

```
$obj = new UnitConverter();
echo $obj->getUnit();
```

> Output will be a json string

```
$obj = new UnitConverter();
echo $obj->getUnit("km");
```

> {"name":"kilometer", "base":"m", "factor":1000}

# Adding/Insert custom unit
If you want to add custom unit then it is also very easy. This can be done using the function **putUnit()**. This function take four argument as **unit**, **name**, **base**, **factor**. all data must be not null and unit need not be present in existing unit array. **factor** must be a integer/decimal value and not be equal to zero.

```
$obj = new UnitConverter();
$obj->putUnit("n","neo","m",100);
```

It will add this unit to the unit array.

# Edit/Update existing unit
If you want to modify existing factor value of a certain unit, then it is also a very easy task. Just call a function setUnit() and it will do rest of things for you. This function takes two parameter as **unit** and **factor**. 

```
$obj = new UnitConverter();
$obj->setUnit("km", 10000);
```

>It will modify the factor value of **km**.

# Available Units

UnitConverter comes with a large number of standard units build in. this section details all of these units by category.

The base unit for each category is highlighted in bold.

## Length

* **m - meter**
* km - kilometer
* dm - decimeter
* cm - centimeter
* mm - milimeter
* μm - micrometer
* nm - nanometer
* pm - picometer
* nmi - nautical mile
* mi - mile
* fur - femara
* fm - fathom
* yd - yard
* ft - foot
* in - inch
* hd - hand
* ld - lunar distance
* au - astronomical unit
* ly - lightyear
* pc - parsec

## Area

* **m2 - meter square**
* km2 - kilometer square
* ha - hectare
* are - are
* dm2 - decimeter square
* cm2 - centimeter square
* mm2 - milimeter square
* μm2 - micron square
* ac - acre
* mi2 - mile square
* yd2 - yard square
* ft2 - foot square
* in2 - inch square
* rd2 - rod

## Volume

* **m3 - meter cube**
* dm3 - decimeter cube
* cm3 - centimeter cube
* mm3 - milimeter cube
* hl - hectolitre
* l - litre
* dl - decilitre
* cl - centilitre
* ml - mililitre
* ft3 - foot cube
* in3 - inch cube
* yd3 - yard cube
* af3 - acre cube
* pt - pint
* gal - gallon

## Mass

* **kg - kilogram**
* t - metric ton
* g - gram
* mg - miligram
* μg - microgram
* q - quintal
* lb - pound
* oz - ounce
* ct - carat
* gr - grain
* lt - long ton
* st - short ton
* kwt - UK hundred weight
* swt - US hundred weight
* st - UK stone
* N - Newton

## Speed

* **mps - meter per second**
* kph - kilometer per hour
* kps - kilometer per second
* mph - mile per hour
* C - lightspeed
* ma - mach
* kn - knot
* fps - foot per hour
* ips - inch per hour

## Time

* **s - second**
* y - year
* mth - month
* wk - week
* d - day
* h - hour
* min - minute
* ms - milisecond
* μs - microsecond
* ns - nanosecond
* ps - picosecond

## Plane Angle

* **deg - degree**
* rad - radian
* gad - gradian
* mrad - milliradian
* sa - second of arc

## Pressure

* **pa - pascal**
* kpa - kilopascal
* mpa - megapascal
* bar - bar
* mbar - milibar
* psi - pound - force per square inch
* tor - torr

## Energy

* **j - joule**
* kj - kilojoule
* mj - megajoule
* cal - calorie
* whr - watt hour
* kwhr - kilowatt hour
* mwhr - megawatt hour
* mev - mega electron volt
* tu - british thermal unit
* Nm - newton meter
* ftlb - foot pound

## Data Storage

* **b - bit**
* kb - kilobit
* kbb - kibibit
* mb - megabit
* mbb - mebibit
* gb - gegabit
* gbb - gebibit
* tb - terabit
* tbb - tebibit
* pb - petabit
* pbb - pebibit

* B -byte
* KB - kilobyte
* KBB - kibibyte
* MB - megabyte
* MBB - mebinyte
* GB - gegabyte
* GBB - gebibyte
* TB - terabyte
* TBB - tebibyte
* PB - petabyte
* PBB - pebibyte

## Frequency

* **hz - hertz**
* khz - kilohertz
* mhz - megahertz
* ghz - gigahertz
