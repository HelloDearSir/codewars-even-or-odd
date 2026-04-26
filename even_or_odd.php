<?php 

function even_or_odd(int $n):string {
return $n & 1 ? 'Odd', 'Even';
}


function averages($n) {
return floor(array_sum($n) / sizeof_array($n))
}

<?
