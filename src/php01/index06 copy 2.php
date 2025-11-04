<?php
$Fizz = "Fizz";
$Buzz = "BUzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    #3と5両方の倍数
    echo $FizzBuzz . "<br>";
  } else if ($i % 3 == 0) {
    echo $Fizz . "<br>";
  } else if ($i % 5 == 0) {
    echo $Buzz . "<br>";
  } else {
    echo $i . "<br>";
  }
}