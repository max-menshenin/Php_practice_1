<?php
/* Практическое задание №1
Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника, которые имеют свой
набор характеристик, умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом. На основе этой информации
постройте классы с использованием абстрактного класса и интерфейса. Напишите принимающую объект машины функцию, которая
бы заставляла ее ехать и вызвала одну из способностей машины. Пусть, если это легковое авто, будет закись азота,
если это бульдозер, — управление ковшом. Принимающая функция должна быть полиморфной. Необходимо реализовать только
структуру.
*/

abstract class Vehicle implements driveForward, driveBack, doN20, loadBucket {
    private $body;
    private $engine;
    private $wheels;
    private $speed;
}

class Lamborghini extends Vehicle {
    function driveForward($speed){
        $this->$speed += 10;
    }

}
class Bulldozer extends Vehicle implements loadBucket {
    function driveForward($speed){
        $this->$speed += 10;
    }
    function driveBack($speed){
        $this->$speed -= 10;
    }
    function loadBucket($bucket){
        $this->$bucket = $bucket;
    }
}
class Tank extends Vehicle {
}

interface driveForward{
}
interface driveBack {

}
interface doN20 {
}
interface loadBucket {
}
