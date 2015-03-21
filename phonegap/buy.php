<?php
/**
 * Created by PhpStorm.
 * User: Taylor
 * Date: 3/20/15
 * Time: 3:37 AM
 */

//print_r( $_GET );

$qtys = $_GET['qty'];
$prodIDs = $_GET['prodID'];

//print_r( $qtys );
//print_r( $prodIDs );

//process order

$prodIDs = array_values($prodIDs);
$qtys = array_values($qtys);

    $form =
    "<form method=post name='order' action='mail.php'>
        Name: <input type='text' name='name' /> <br>
        Address: <input type='address' name='address' /><br>";

    for ($i = 0; $i <= count($prodIDs); $i++) {
        $form .= "<input type='hidden' name={$prodIDs[$i]} value={$qtys[$i]} />";
    }
    $form .= "<input type='hidden' name={$_GET['prodID']} value={$prodIDs} />";
    $form .= "<input type='hidden' name='prodID' value='GOODBYE' />";


    $form .=    "<input type='submit' name='submit' value='Submit Order' />
    </form>";

echo json_encode($form);