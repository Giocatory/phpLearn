<?php
// lambda function (or anonymous function)
$hello = function ($user) {echo "Hello, $user!";};
$hello('Mikhail');  // Hello, Mikhail!
echo "\n\n";

// callback function
function greet(callable $anon): void
{
    $anon('Tatyana');
}
greet($hello);  // Hello, Tatyana!
echo "\n\n";


function meet(): callable {
    $time = 'morning';
    return function ($name) use (&$time) {
        return "Good $time, $name!";
    };
}
$meeting = meet();
echo $meeting('Margo');  // Good morning, Margo!