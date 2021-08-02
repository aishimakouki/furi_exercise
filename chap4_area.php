<?php
function displayMsg( $top, $bottom, $height ){
    $msg = <<< EOM
台形のサイズ
上底 : {$top}
下底 : {$bottom}
高さ : {$height}
面積 : {$area} \n
EOM;
    echo $msg;
}

function calcArea( $area ){
    return ($top + $bottom) * $height / 2; 
}


