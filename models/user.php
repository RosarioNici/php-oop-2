<?php 
// La classe user mi servirà per implemetare i parametri richiesti necessari per effettuare un acquisto online
class User {

public $name = '';
public $surname = '';
public $mail ='';
public $addres = '';
public $creditcardNumber = '';
public $CrCdExpiryDate;
public $CrCdCVV = 0;
public $cart=[];


function fullCart($product){
    $this->cart[] = $product;
}
function checkout(){
$totPrice = 0;
$totTax = 0;
foreach($this->product as $products){
    $totPrice += $product->price;
    $totTax += ($totPrice * 22 / 100);
}
return[
'total whitout tax' => $totPrice - $totTax,
'tax' => $totTax,
'Total'=> $totPrice + $totTax,

];

}



}




?>