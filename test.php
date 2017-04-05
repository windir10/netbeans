<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$test = 0;
$i_curvalue = 0;
echo 'my first file php with netbeans';

echo '<br>';

$a_test = array();
array_push($a_test, 23);
array_push($a_test, 27);
array_push($a_test, 2);
array_push($a_test, 28);
array_push($a_test, 8);

foreach ($a_test as $value) {
    $i_curvalue = $value;
    $test++;
}

echo 'test = '.$test;

?>

