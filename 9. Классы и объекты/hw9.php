<?php

class Car
{
    public $color;
    public $box;
    public function __construct($color, $box)
    {
        $this->color = $color;
        $this->box = $box;
    }
}
$mersedes = new Car('white', 'mehanic');
$lada = new Car('red', 'auto');

class TV
{
    public $type;
    public $size;
    public function __construct($type, $size){
        $this->type = $type;
        $this->size = $size;
    }
}
$LG = new TV('color','small');
$Toshiba = new TV('bl&wh', 'big');

class Pen
{
    public $pencolor;
    public $type;
    public function __construct($pencolor, $type)
    {
        $this->type=$type;
        $this->pencolor=$pencolor;
    }
}
$Parker = new Pen('green', 'free');
$Pilot = new Pen('black', 'expensive');

class Duck
{
    public $size;
    public $gend;
    public function __construct($size, $gend)
    {
        $this->size = $size;
        $this->gend = $gend;
    }
}
$Donald = new Duck('big', 'drake');
$Daisy = new Duck('small', 'duck');

class product
{
    public $price;
    public $discont;
    public $pop;
    public $tv;
    public function __construct($price, $discont, $pop, $tv)
    {
        $this->price = $price;
        $this->discont = $discont;
        $this->pop = $pop;
        $this->tv = $tv;
    }
}
$First = new product('1000', '20', 'popular', 'LG');
$Second = new product('500', '40', 'unpopular', 'Samsung');
$Third = new product('1200', '10', 'popular', 'Toshiba');

?>
