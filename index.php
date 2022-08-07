<?php 
$x=5;
echo $x;
$str="su pon";
$arr=["x","y","z"];
$asso=[
    "name"=>"su pon",
    "age"=>22,
    "status"=>false
];
echo $str;
echo "<br>";
print_r($arr);
echo "<br>";
print_r($asso);
echo "<br>";

$y=true;
if($y){
    echo "this is true";
}else{
    echo "this is false";
}
echo "<br>";

for($i=1;$i<10;$i++){
    echo "no $i";
    echo "<br>";
}
?>

