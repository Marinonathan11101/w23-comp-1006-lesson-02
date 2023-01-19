<?php

$my_arr_constructor = array();

$my_arr_literal = [];

$my_arr_init_vals = ['a', 1, true, 5.6];

$mixed_arr = [
    "Nathan Marino",
    true,
    44,
    30.62

];

array_push($mixed_arr, "I like cats"); // How to add stuff to an array

$mixed_arr[] = "I like dogs";

array_unshift($mixed_arr, false); // Add to the beginning of the array

array_pop($mixed_arr); // Remove the beginning entry in the array

array_shift($mixed_arr); // Remove the last entry in tan array

array_splice($mixed_arr, 3, 1); 

$mixed_arr[] = [
    "Hello",
    "World"


];

$mixed_arr[3] = 'I like hedgehogs'; // Motify something in an array

?>


