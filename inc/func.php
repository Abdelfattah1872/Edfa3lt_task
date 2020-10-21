<?php

$t_shirt = 10.99;
$pants = 14.99;
$jacket = 19.99;
$shoes = 24.99;

function Calculate_bill($p_shirt, $p_pants, $p_jacket, $p_jacket, $p_shose, $p_shirt , $shirt_num , $pants_num , $jacket_num , $shoes_num){
    $total_bill = [];
    $tax = "14%";
    if (!empty($shirt_num)){
        if ($shirt_num < 1){
            $discount = "10%";
        }else{
            $bill = $shirt_num * $p_shirt;

        }

    }
}