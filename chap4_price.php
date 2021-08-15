<?php
function displayMsg( $name, $sum, $price ) {
    $msg = <<<EOM

{$name}様
ご注文を承りました。
合計{$sum}円です。
{$price}円(税込)になります。\n

EOM;
    echo $msg;
}

function add( $item1, $item2, $item3 ) {
    return $sum =  $item1 + $item2 + $item3; 
}