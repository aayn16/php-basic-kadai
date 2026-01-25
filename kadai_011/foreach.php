<?php

//$sample = "動物";
//echo "人間は{$sample}である";
//echo '植物は{$sample}ではない';

$kadai = ['名前' => '玉ねぎ', '値段'=> 200, '産地' => '北海道' ];

foreach ($kadai as $key => $value){
    echo "{$key}:{$value}<br>"; 

}
?>