<?php

require_once('equation.php');

print_r(line(1, 2));
echo "<br/>";
print_r(square(1, -3, 2));
echo "<br/>";
print_r(cube(1, 3, 3, 3));
echo "<br/> f(x) = x<sup>2</sup> </br>";
print_r(integral($f, 2, 5));
echo "</br>";
print_r(rotate($f, 2, 5));
