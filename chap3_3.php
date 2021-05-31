<?
foreach (range(1, 100) as $int) {
    if ($int % 3 == 0) {
        var_dump($int = "Fizz");
    } elseif ($int % 5 == 0) {
        var_dump($int = "Buzz");
    } elseif ($int % 3 == 0 && $int % 5 == 0) {
        var_dump($int = "FizzBuzz");
    } else {
        var_dump($int);
    }
}