<?php
function calcArea( $top, $bottom, $height ){
    $msg = <<<EOM
台形のサイズ
上底 :{$top}
下底 :{$bottom}
高さ :{$height}
面積 : {($top + $bottom) * $height / 2} \n
EOM;
    echo $msg
}

