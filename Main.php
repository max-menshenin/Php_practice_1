<?php
/* Практическое задание №1
Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника, которые имеют свой
набор характеристик, умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом. На основе этой информации
постройте классы с использованием абстрактного класса и интерфейса. Напишите принимающую объект машины функцию, которая
бы заставляла ее ехать и вызвала одну из способностей машины. Пусть, если это легковое авто, будет закись азота,
если это бульдозер, — управление ковшом. Принимающая функция должна быть полиморфной. Необходимо реализовать только
структуру.
*/

class Vehicle implements iVehicle, iBucket
{
    private $body;
    private $engine;
    private $wheels;
    private $speed;

    public function driveForward($speed)
    {
        echo "Vehicle is moving with speed ".$speed;
    }

    public function driveBack ($speed){
        echo "Vehicle is moving backward with speed ".$speed;
    }

     function loadBucket($cargo){
        echo 'Cargo is '.$cargo;
    }
}

interface iVehicle
{
    public function driveForward($speed);
    public function driveBack($speed);
}
interface iBucket
{
    public function loadBucket($cargo);
}
$bulldozer = new Vehicle();
$bulldozer->driveForward(7);
$tank = new Vehicle();
echo '<br>';
$bulldozer->loadBucket('ground');
$car = new Vehicle();

