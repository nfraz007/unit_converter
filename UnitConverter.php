<?php

/*

project : converter
author  : Nazish Fraz
Date    : 18-05-2017
copyright reserved

*/

class UnitConverter{
	private $number,$from,$to;
	private $unit=array();

	function __construct(){
		$this->init();
	}

	// initialize the unit array
	private function init(){
		$this->unit=array(
			// unit of length
			"m"    => array("name" => "meter"                , "base" => "m"  , "factor" => 1), //meter - base unit for length
			"km"   => array("name" => "kilometer"            , "base" => "m"  , "factor" => 1000), //kilometer
			"dm"   => array("name" => "decimeter"            , "base" => "m"  , "factor" => 0.1), //decimeter
			"cm"   => array("name" => "centimeter"           , "base" => "m"  , "factor" => 0.01), //centimeter
			"mm"   => array("name" => "milimeter"            , "base" => "m"  , "factor" => 0.001), //milimeter
			"μm"   => array("name" => "micrometer"           , "base" => "m"  , "factor" => 0.000001), //micrometer
			"nm"   => array("name" => "nanometer"            , "base" => "m"  , "factor" => 0.000000001), //nanometer
			"pm"   => array("name" => "picometer"            , "base" => "m"  , "factor" => 0.000000000001), //picometer
			"nmi"  => array("name" => "nautical mile"        , "base" => "m"  , "factor" => 1852), //nautical mile
			"mi"   => array("name" => "mile"                 , "base" => "m"  , "factor" => 1609.344), //mile
			"fur"  => array("name" => "femara"               , "base" => "m"  , "factor" => 201.168), //femara
			"fm"   => array("name" => "fathom"               , "base" => "m"  , "factor" => 1.8288), //fathom
			"yd"   => array("name" => "yard"                 , "base" => "m"  , "factor" => 0.9144), //yard
			"ft"   => array("name" => "foot"                 , "base" => "m"  , "factor" => 0.3048), //foot
			"in"   => array("name" => "inch"                 , "base" => "m"  , "factor" => 0.0254), //inch
			"hd"   => array("name" => "hand"                 , "base" => "m"  , "factor" => 0.1016), //hand
			"ld"   => array("name" => "lunar distance"       , "base" => "m"  , "factor" => 384401000), //lunar distance
			"au"   => array("name" => "astronomical unit"    , "base" => "m"  , "factor" => 149597870700), //astronomical unit
			"ly"   => array("name" => "lightyear"            , "base" => "m"  , "factor" => 9460730472580800), //lightyear
			"pc"   => array("name" => "parsec"               , "base" => "m"  , "factor" => 30856775814913672.789139379577965), //parsec

			// unit of area
			"m2"   => array("name" => "meter square"         , "base" => "m2" , "factor" => 1), //meter square - base unit for area
			"km2"  => array("name" => "kilometer square"     , "base" => "m2" , "factor" => 1000000), //kilometer square
			"ha"   => array("name" => "hectare"              , "base" => "m2" , "factor" => 10000), //hectare
			"are"  => array("name" => "are"                  , "base" => "m2" , "factor" => 100), //are
			"dm2"  => array("name" => "decimeter square"     , "base" => "m2" , "factor" => 0.01), //decimeter square
			"cm2"  => array("name" => "centimeter square"    , "base" => "m2" , "factor" => 0.0001), //centimeter square
			"mm2"  => array("name" => "milimeter square"     , "base" => "m2" , "factor" => 0.000001), //milimeter square
			"μm2"  => array("name" => "micron square"        , "base" => "m2" , "factor" => 0.000000000001), //micron square
			"ac"   => array("name" => "acre"                 , "base" => "m2" , "factor" => 4046.856), //acre
			"mi2"  => array("name" => "mile square"          , "base" => "m2" , "factor" => 2589988.11), //mile square
			"yd2"  => array("name" => "yard square"          , "base" => "m2" , "factor" => 0.83612736), //yard square
			"ft2"  => array("name" => "foot"                 , "base" => "m2" , "factor" => 0.09290304), //foot square
			"in2"  => array("name" => "inch"                 , "base" => "m2" , "factor" => 0.00064516), //inch square
			"rd2"  => array("name" => "rod"                  , "base" => "m2" , "factor" => 25.2928526), //rod square
			
			// unit of volume
			"m3"   => array("name" => "meter cube"           , "base" => "m3" , "factor" => 1), //meter cube - base unit for volume
			"dm3"  => array("name" => "decimeter cube"       , "base" => "m3" , "factor" => 0.001), //decimeter cube
			"cm3"  => array("name" => "centimeter cube"      , "base" => "m3" , "factor" => 0.000001), //centimeter cube
			"mm3"  => array("name" => "millimeter cube"      , "base" => "m3" , "factor" => 0.000000001), //millimeter cube
			"hl"   => array("name" => "hectolitre"           , "base" => "m3" , "factor" => 0.1), //hectolitre
			"l"    => array("name" => "litre"                , "base" => "m3" , "factor" => 0.001), //litre
			"dl"   => array("name" => "decilitre"            , "base" => "m3" , "factor" => 0.0001), //decilitre
			"cl"   => array("name" => "centilitre"           , "base" => "m3" , "factor" => 0.00001), //centilitre
			"ml"   => array("name" => "millilitre"           , "base" => "m3" , "factor" => 0.000001), //millilitre
			"ft3"  => array("name" => "foot cube"            , "base" => "m3" , "factor" => 0.0283168466), //foot cube
			"in3"  => array("name" => "inch cube"            , "base" => "m3" , "factor" => 0.000016387064), //inch cube
			"yd3"  => array("name" => "yard cube"            , "base" => "m3" , "factor" => 0.764554858), //yard cube
			"af3"  => array("name" => "acre cube"            , "base" => "m3" , "factor" => 1234), //acre foot
			"pt"   => array("name" => "pint"                 , "base" => "m3" , "factor" => 0.000473176), //pint
			"gal"  => array("name" => "gallon"               , "base" => "m3" , "factor" => 0.00378541), //gallon
			
			// unit of mass
			"kg"   => array("name" => "kilogram"             , "base" => "kg" , "factor" => 1), //kilogram - base unit for mass
			"t"    => array("name" => "metric ton"           , "base" => "kg" , "factor" => 1000), //metric ton
			"g"    => array("name" => "gram"                 , "base" => "kg" , "factor" => 0.001), //gram
			"mg"   => array("name" => "miligram"             , "base" => "kg" , "factor" => 0.000001), //miligram
			"μg"   => array("name" => "microgram"            , "base" => "kg" , "factor" => 0.000000001), //microgram
			"q"    => array("name" => "quintal"              , "base" => "kg" , "factor" => 100), //quintal
			"lb"   => array("name" => "pound"                , "base" => "kg" , "factor" => 0.45359237), //pound
			"oz"   => array("name" => "ounce"                , "base" => "kg" , "factor" => 0.0283495231), //ounce
			"ct"   => array("name" => "carat"                , "base" => "kg" , "factor" => 0.0002), //carat
			"gr"   => array("name" => "grain"                , "base" => "kg" , "factor" => 0.00006479891), //grain
			"lt"   => array("name" => "long ton"             , "base" => "kg" , "factor" => 1016.04691), //long ton
			"st"   => array("name" => "short ton"            , "base" => "kg" , "factor" => 907.18474), //short ton
			"kwt"  => array("name" => "UK hundred weight"    , "base" => "kg" , "factor" => 50.8023454), //uk hundred weight
			"swt"  => array("name" => "US hundred weight"    , "base" => "kg" , "factor" => 45.359237), //us hundred weight
			"st"   => array("name" => "UK stone"             , "base" => "kg" , "factor" => 6.35029318), //uk stone
			"N"    => array("name" => "newton"               , "base" => "kg" , "factor" => 9.80665002863885), //Newton (based on earth gravity)
			
			// unit of speed
			"mps"  => array("name" => "meter per second"      , "base" => "mps" , "factor" => 1), //meter per second - base unit for speed
			"kph"  => array("name" => "kilometer per hour"    , "base" => "mps" , "factor" => 0.2777777778), //kilometer per hour
			"kps"  => array("name" => "kilometer per second"  , "base" => "mps" , "factor" => 1000), //kilometer per second
			"mph"  => array("name" => "mile per hour"         , "base" => "mps" , "factor" => 0.44704), //mile per hour
			"C"    => array("name" => "lightspeed"            , "base" => "mps" , "factor" => 299792458), //lightspeed
			"ma"   => array("name" => "mach"                  , "base" => "mps" , "factor" => 340.3), //mach
			"kn"   => array("name" => "knot"                  , "base" => "mps" , "factor" => 0.51444444444), //knot
			"fps"  => array("name" => "foot per hour"         , "base" => "mps" , "factor" => 0.3048), //foot per hour
			"ips"  => array("name" => "inch per hour"         , "base" => "mps" , "factor" => 0.0254), //inch per hour

			// unit of time
			"s"    => array("name" => "second"                , "base" => "s" , "factor" => 1), //second - base unit for time
			"y"    => array("name" => "year"                  , "base" => "s" , "factor" => 31536000), //year - standard year
			"mth"  => array("name" => "month"                 , "base" => "s" , "factor" => 18748800), //month - 31 days
			"wk"   => array("name" => "week"                  , "base" => "s" , "factor" => 604800), //week
			"d"    => array("name" => "day"                   , "base" => "s" , "factor" => 86400), //day
			"h"    => array("name" => "hour"                  , "base" => "s" , "factor" => 3600), //hour
			"min"  => array("name" => "minute"                , "base" => "s" , "factor" => 30), //minute
			"ms"   => array("name" => "milisecond"            , "base" => "s" , "factor" => 0.001), //milisecond
			"μs"   => array("name" => "microsecond"           , "base" => "s" , "factor" => 0.000001), //microsecond
			"ns"   => array("name" => "nanosecond"            , "base" => "s" , "factor" => 0.000000001), //nanosecond
			"ps"   => array("name" => "picosecond"            , "base" => "s" , "factor" => 0.000000000001), //picosecond
			
			// unit of plane angle
			"deg"  => array("name" => "degree"                , "base" => "deg" , "factor" => 1), //degree - base unit for plane angle
			"rad"  => array("name" => "radian"                , "base" => "deg" , "factor" => 57.2958), //radian
			"gad"  => array("name" => "gradian"               , "base" => "deg" , "factor" => 0.9), //gradian
			"mrad" => array("name" => "milliradian"           , "base" => "deg" , "factor" => 0.0572958), //milliradian
			"sa"   => array("name" => "second of arc"         , "base" => "deg" , "factor" => 0.00027777778), //second of arc

			// unit of pressure
			"pa"   => array("name" => "Pascal"                , "base" => "Pa" , "factor" => 1), //Pascal - base unit for Pressure
			"kpa"  => array("name" => "kilopascal"            , "base" => "Pa" , "factor" => 1000), //kilopascal
			"mpa"  => array("name" => "megapascal"            , "base" => "Pa" , "factor" => 1000000), //megapascal
			"bar"  => array("name" => "bar"                   , "base" => "Pa" , "factor" => 100000), //bar
			"mbar" => array("name" => "milibar"               , "base" => "Pa" , "factor" => 100), //milibar
			"psi"  => array("name" => "force per square inch" , "base" => "Pa" , "factor" => 6894.76), //pound-force per square inch
			"tor"  => array("name" => "torr"                  , "base" => "pa" , "factor" => 133.322), //torr
			
			// unit of energy
			"j"    => array("name" => "joule"                 , "base" => "j" , "factor" => 1), //joule - base unit for energy
			"kj"   => array("name" => "kilojoule"             , "base" => "j" , "factor" => 1000), //kilojoule
			"mj"   => array("name" => "megajoule"             , "base" => "j" , "factor" => 1000000), //megajoule
			"cal"  => array("name" => "calorie"               , "base" => "j" , "factor" => 4184), //calorie or kilocalorie
			"whr"  => array("name" => "watt hour"             , "base" => "j" , "factor" => 3600), //watt hour
			"kwhr" => array("name" => "kilowatt hour"         , "base" => "j" , "factor" => 3600000), //kilowatt hour
			"mwhr" => array("name" => "megawatt hour"         , "base" => "j" , "factor" => 3600000000), //megawatt hour
			"mev"  => array("name" => "mega electron volt"    , "base" => "j" , "factor" => 0.00000000000000016022), //mega electron volt
			"tu"   => array("name" => "british thermal unit"  , "base" => "j" , "factor" => 1055.06), //british thermal unit
			"Nm"   => array("name" => "newton meter"          , "base" => "j" , "factor" => 1), //newton meter
			"ftlb" => array("name" => "foot pound"            , "base" => "j" , "factor" => 1.35582), //foot pound
			
			// unit of data storage
			"b"    => array("name" => "bit"                   , "base" => "bps" , "factor" => 1), //bit - base unit for data storage
			"kb"   => array("name" => "kilobit"               , "base" => "bps" , "factor" => 1000), //kilobit
			"kbb"  => array("name" => "kibibit"               , "base" => "bps" , "factor" => 1024), //kibibit 
			"mb"   => array("name" => "megabit"               , "base" => "bps" , "factor" => 1000000), //megabit 
			"mbb"  => array("name" => "mebibit"               , "base" => "bps" , "factor" => 1048000), //mebibit 
			"gb"   => array("name" => "gigabit"               , "base" => "bps" , "factor" => 1000000000), //gigabit
			"gbb"  => array("name" => "gibibit"               , "base" => "bps" , "factor" => 1074000000), //gibibit 
			"tb"   => array("name" => "terabit"               , "base" => "bps" , "factor" => 1000000000000), //terabit 
			"tbb"  => array("name" => "tebibit"               , "base" => "bps" , "factor" => 1100000000000), //tebibit 
			"pb"   => array("name" => "petabit"               , "base" => "bps" , "factor" => 1000000000000000), //petabit 
			"pbb"  => array("name" => "pebibit"               , "base" => "bps" , "factor" => 1126000000000000), //pebibit 

			"B"    => array("name" => "byte"                  , "base" => "bps" , "factor" => 8), //byte
			"KB"   => array("name" => "kilobyte"              , "base" => "bps" , "factor" => 8000), //kilobyte 
			"KBB"  => array("name" => "kibibyte"              , "base" => "bps" , "factor" => 8192), //kibibyte 
			"MB"   => array("name" => "megabyte"              , "base" => "bps" , "factor" => 8000000), //megabyte 
			"MBB"  => array("name" => "mebibyte"              , "base" => "bps" , "factor" => 8389000), //mebibyte 
			"GB"   => array("name" => "gigabyte"              , "base" => "bps" , "factor" => 8000000000), //gigabyte 
			"GBB"  => array("name" => "gibibyte"              , "base" => "bps" , "factor" => 8590000000), //gibibyte 
			"TB"   => array("name" => "terabyte"              , "base" => "bps" , "factor" => 8000000000000), //terabyte 
			"TBB"  => array("name" => "tebibyte"              , "base" => "bps" , "factor" => 8796000000000), //tebibyte 
			"PB"   => array("name" => "petaabyte"             , "base" => "bps" , "factor" => 8000000000000000), //petaabyte 
			"PBB"  => array("name" => "pebibyte"              , "base" => "bps" , "factor" => 9.00700000000000), //pebibyte 

			// unit of frequency
			"hz"   => array("name" => "hertz"                 , "base" => "hz" , "factor" => 1), //hertz - base unit for frequency
			"khz"  => array("name" => "kilohertz"             , "base" => "hz" , "factor" => 1000), //kilohertz
			"mhz"  => array("name" => "megahertz"             , "base" => "hz" , "factor" => 1000000), //megahertz
			"ghz"  => array("name" => "gigahertz"             , "base" => "hz" , "factor" => 1000000000), //gigahertz
		);
	}

	// setup function
	private function set($number,$from,$to){
		if(is_numeric($number)){
			$this->number=$number;
			if(array_key_exists($from, $this->unit) && array_key_exists($to, $this->unit)){
				if($this->unit[$from]["base"]==$this->unit[$to]["base"]){
					$this->from=$this->unit[$from]["factor"];
					$this->to=$this->unit[$to]["factor"];
				}else{
					throw new Exception("Cannot Convert Between Units of Different Types", 1);
				}
			}else{
				throw new Exception("From or to parameter does not exist", 1);
			}
		}else{
			throw new Exception("Invalid number input, number must be integer or decimal value", 1);
			
		}
	}

	// function that convert the number from one unit to another
	public function convert($number,$from,$to){
		$this->set($number,$from,$to);

		$output = ($this->number*$this->from)/$this->to;
		return $output;
	}

	// for get all the existing unit data
	public function getUnit($unit=""){
		if($unit==""){
			//return all unit
			return json_encode($this->unit);
		}else{
			if(array_key_exists($unit, $this->unit)){
				return json_encode($this->unit[$unit]);
			}else{
				throw new Exception("Sorry, this unit does not exist", 1);
			}
		}
	}

	// for insert a new unit data
	public function putUnit($unit,$name,$base,$factor){
		if(!array_key_exists($unit, $this->unit)){
			if($unit!="" && $name!="" && $base!=""){
				if(is_numeric($factor) && $factor!=0){
					$this->unit[$unit]=array("name"=>$name, "base"=>$base, "factor"=>$factor);
				}else{
					throw new Exception("factor value must be integer/decimal and not equal to zero", 1);
				}
			}else{
				throw new Exception("data must be not null", 1);
			}
		}else{
			throw new Exception("Sorry, this unit is already exist. this unit cannot be added", 1);
		}
	}

	// for update any existing unit data
	public function setUnit($unit,$factor){
		if(array_key_exists($unit, $this->unit)){
			if($unit!=""){
				if(is_numeric($factor) && $factor!=0){
					$this->unit[$unit]["factor"]=$factor;
				}else{
					throw new Exception("factor value must be integer/decimal and not equal to zero", 1);
				}
			}else{
				throw new Exception("unit value cannot be empty", 1);
			}
		}else{
			throw new Exception("Sorry, the input unit value does not exist so cannot be updated", 1);
		}
	}
}
?>