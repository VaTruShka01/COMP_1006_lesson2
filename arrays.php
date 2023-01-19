<?php

$my_arr_constructor = array();

$my_arr_literal = [];

$my_arr_init_vals = ['a', 1, true, 5.6];

$mixed_arr = ["vlad", true, 18, 29.45];



array_push($mixed_arr, "I like cats"); //adds value to arr in the end

$mixed_arr[] = "I like dogs"; //adds value to arr in the end

array_unshift($mixed_arr, false); //adds var to arr in the beginning

array_pop($mixed_arr); //removes var from the end

array_shift($mixed_arr); //removes var from the beginning 

array_splice($mixed_arr, 3, 1); //removes portion from arr

$mixed_arr[] = ["hello",
                "world"];      //adds new arr inside existing arr in the end

$mixed_arr[3] = 'I like hedgehogs'; //rewrites value on index

?>