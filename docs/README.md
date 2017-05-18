# Unit Converter Library

# Setup

Setting up this converter is very easy.

Just include the library in your project and thats it.

```
include("UnitConverter.php");
```
```
require "UnitConverter.php";
```

# Convert A Unit
To convert a unit, create an instance of UnitConverter class. you can then call the convert() function on the UnitConverter object, passing three values as *number*, *from*, *to* which is

number : the integer/decimal value which is going to be converted

from : initial unit

to : final unit in which the number you want to convert

```
$obj = new UnitConverter();
echo $obj->convert(2, "km", "ft");
```
> 2 Km = 6561.6797900262 Ft

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