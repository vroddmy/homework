<?php

class ToyShop{
    public $discont = '10';
    public $pop = 'popular';
    public function changeDiskont($discont)
    {
        $this->discont = $discont;
    }
    public function changePop($pop)
    {
        $this->pop = $pop;
    }
}
interface ToyShopCar
{
    public function changeColor($color);
    public function changeBox($box);
}

class Car extends ToyShop implements ToyShopCar{
    public $box = 'auto';
    public $color = 'red';
    public function changeBox($box){
        $this->box = $box;
    }
    public function changeColor($color){
        $this->color = $color;
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->color;
$lada->changeBox('mehanic');
$mersedes->changeColor('green');
$mersedes->box;
$mersedes->pop;
$lada->changeDiskont('20');

interface ToyShopTV
{
    public function changeType($type);
    public function changeSize($size);
}

class TV extends ToyShop implements ToyShopTV{
    public $type = 'color';
    public $size = 'small';
    public function changeType($type){
        $this->type = $type;
    }
    public function changeSize($size){
        $this->size = $size;
    }
}
$LG = new TV();
$Toshiba = new TV();
$LG->changeType('black&white');
$Toshiba->type;
$LG->size;
$Toshiba->changeSize('big');
$Toshiba->pop;
$LG->changeDiskont('50');

interface ToyShopPen
{
    public function changeType($type);
    public function changeColor($colorpen);
}

class Pen extends ToyShop implements ToyShopPen{
    public $type = 'expencive';
    public $colorpen = 'red';
    public function changeType($type){
        $this->type = $type;
    }
    public function changeColor($colorpen){
        $this->colorpen = $colorpen;
    }
}
$Parker = new Pen();
$Pilot = new Pen();
$Parker->type;
$Pilot->changeType('cheap');
$Parker->colorpen;
$Pilot->changeColor('Black');
$Parker->discont;
$Pilot->changePop('unpopular');

interface ToyShopDuck
{
    public function changeSize($size);
    public function changeGend($gend);
}

class Duck extends ToyShop implements ToyShopDuck{
    public $gend = 'drake';
    public $size = 'big';
    public function changeGend($gend)
    {
        $this->gend = $gend;
    }
    public function changeSize($size){
        $this->size = $size;
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Donald->gend;
$Daisy->changeGend('duck');
$Donald->size;
$Daisy->changeSize('small');
$Donald->pop;
$Daisy->changeDiskont('25');
interface ToyShopTVs
{
    public function changePrice($price);
    public function changeTv($tv);
}

class TVs extends ToyShop implements ToyShopTVs{
    public $tv = 'Toshiba';
    public $price = '100';
    public function changeTv($tv)
    {
        $this->tv = $tv;
    }
    public function changePrice($price)
    {
        $this->price = $price;
    }
}
$First = new TVs();
$Second = new TVs();
$Third = new TVs();
$First->price;
$First->changeDiskont('35');
$First->pop;
$First->tv;
$Second->price;
$Second->discont;
$Second->changePop('unpopular');
$Second->changeTv('Tomas');
$Third->changePrice(5000);
$Third->changeDiskont('0');
$Third->pop;
$Third->changeTv('Sony');

?>
