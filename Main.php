<?php
/* Практическое задание №1
Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника, которые имеют свой
набор характеристик, умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом. На основе этой информации
постройте классы с использованием абстрактного класса и интерфейса. Напишите принимающую объект машины функцию, которая
бы заставляла ее ехать и вызвала одну из способностей машины. Пусть, если это легковое авто, будет закись азота,
если это бульдозер, — управление ковшом. Принимающая функция должна быть полиморфной. Необходимо реализовать только
структуру.
*/

abstract class Vehicle implements driveForward, driveBack, doN20 {
    public $body;
    private $engine;
    private $wheels;
    public $fuel;
    private $speed;

    public function replaceWheels($wheels) {
        $this->wheels = $wheels;
    }

}

class Lamborghini extends Vehicle {

}
class Bulldozer extends Vehicle{

}
class Tank extends Vehicle {

}

interface driveForward{
}
interface driveBack {

}
interface doN20 {

}