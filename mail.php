<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 3/20/15
 * Time: 4:37 PM
 */


//for ($i = 0; $i <= count($prodIDs); $i++) {
//    $order .= "{$prodIDs[$i]}: {$qtys[$i]}";
//}


print_r("Your order has been sent and is being processed!");

mail("217cis@gmail.com",
    "ORDER IN!",
    $_POST['name'].
    "\n".$_POST['address'].
    "\nPizza_1: ".$_POST['pizza_1']
    ."\nPizza_2: ".$_POST['pizza_2']
    ."\nPizza_3: ".$_POST['pizza_3']
    ."\nPizza_4: ".$_POST['pizza_4']);

print_r("Your order has been sent and is being processed!");