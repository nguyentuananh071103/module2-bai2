<?php
$arr1=[1,3,4,6,7,8,9,];
$arr2=[10,11,12,13,14,15,16];
$arr3=[];
for ($i=0; $i<count($arr1); $i++){
    array_push($arr3,$arr1[$i]);
}
for ($i=0; $i<count($arr2); $i++){
    array_push($arr3,$arr2[$i]);
}
var_dump($arr3);
echo "<br>";
echo $arr3;


