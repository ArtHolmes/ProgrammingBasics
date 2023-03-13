<?php

/*

Nested for' loops statements explained.

Lots of people struggle with nested loops,
here is a brief explanation.

The first iteration of the outer loop runs, it sees if
$i is less than 2, which it is because the for loop
is initialized at $i = 0. So then it completely runs the inner for loop,
and that inner for loops runs until $j is no longer
less than 2, the first iteration prints 0, 1
then the inner for loop stops because its met its limit
the outer loop begins its second iteration and
$x is now equal to 1 $i = 1
since $i being equal to 1 means that It's still
less than the loop limit of 2, its runs the inner loop
again. The inner loop starts over and runs completely again
until $j is no longer less than 2
the inner loops prints out another 0, 1
and then stops because its last loop evaluates if
$j, which equals 2 at this point, is less than 2,
which it is not, they are equal. So the inner loop
stops. The out loop runs again but this time
its checking to see if $i, which equals 2 at this point
is less than 2, which it is not (it 2), so the outer loop is done.
The output is

0
1
0
1


Arthur Holmes
3/11/2023
8:45PM EST
ArthurHolmes.com
PHP 8.2 | PHPSTORM
https://github.com/ArthurLHolmes



*/



for ($i = 0; $i < 2; $i++)

{


    for ($j = 0; $j < 2; $j++)

    {

        echo $j . "<br>";


    }






}

