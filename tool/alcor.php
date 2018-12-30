<?php

$txt = explode("\r\n", file_get_contents($argv[1]));
$ntxt = "";
foreach($txt as $k){
    $block = explode(" ", $k);
    if($k{0} == "#" or $block[0] == "controllers"){
        $ntxt .= $k . "\r\n";
        continue;
    }
    list($manufacturer, $cellLevel, $density, $pn, $processNode) = $block;
    if($pn{strlen($pn) - 2} == "/"){
        $pnn = explode("/", $pn);
        $npn1 = str_replace($pn, $pnn[0], $k);
        $pnn1 = $pnn[0];
        $pnn1{strlen($pnn1) - 1} = $pnn[1];
        $npn2 = str_replace($pn, $pnn1, $k);
        $ntxt .= $npn1 . "\r\n" . $npn2 . "\r\n";
    }else{
        $ntxt .= $k . "\r\n";
    }
}
file_put_contents($argv[1] . ".p", $ntxt);
