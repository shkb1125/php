<?php

$i = 0;

for ($i = 1; $i <= 50; $i++) {
    if (($i % 15) == 0) {
        echo $i . "FizzBuzz" . "<br>";
    } else if (($i % 3) == 0) {
        echo $i . "Fizz" . "<br>";
    } else if (($i % 5) == 0) {
        echo $i . "Buzz" . "<br>";
    } else {
        echo $i . "<br>";
    }

}

?>