<?php

require_once __DIR__ . '/user.php';

// questa istanza riguarda la classe dell'utente registrato dove ho importato la funzione del checkout  ed agguunto lo sconto riservato solo ai clienti registrati
class RegisteredUser extends User {

private $password = '';
private $discount = 20;


function fullCart($product){
    $this->cart[] = $product;
}
function checkout(){
    $cartPrice = parent::checkout();
    return[
        'total whitout tax' => $cartPrice['total whitout tax'],
        'tax' => $cartPrice ['tax'],
        'Total'=> $cartPrice['Total'] - ($totPrice * $discount / 100),
    ];
}}
?>