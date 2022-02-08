<?php

class Human
{
    public $name = 'Bob';
    public $home = 'USA';

    public function self_introduction()
    {
        echo 'テスト' . $this->home . '羽ばたく' . $this->name . '太郎です「。';
    }
}

//Bobの紹介
$Bob = new Human();
$Bob->self_introduction();

//Hajimeの紹介
$Hajime = new Human();
$Hajime->name = '新宿';
$Hajime->home = '新宿';
$Hajime->self_introduction();

//Hiroshiの紹介
$Hiroshi = new Human();
$Hiroshi->name = '恵那';
$Hiroshi->home = '恵那';
$Hiroshi->self_introduction();
