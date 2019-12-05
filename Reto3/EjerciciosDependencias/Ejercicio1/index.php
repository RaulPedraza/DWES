<?php
require 'vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

Timer::start();

for ($x = 0; $x < 100; $x++){
    $numero = random_int(1,10);
    echo $numero;
    sleep(0.2);
}
$time = Timer::stop();

print Timer::secondsToTimeString($time);