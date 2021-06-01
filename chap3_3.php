<?
foreach (range(1, 100) as $int) {
    if ($int % 3 == 0 && $int % 5 == 0) {
        echo ($int = "FizzBuzz");
    } elseif($int % 5 == 0) {
        echo ($int = "Buzz");
    } elseif($int % 3 == 0) {
        echo( $int = "Fuzz");
    } else {
        echo ($int);
    }
}
