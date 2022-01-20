<?php
echo 'Hello World!';
$a=5;
$b=7;
$c='HEY';
$d='GOOD MORNING';
echo '<br>' .$a;
echo '<br>' .$b;
echo '<br>' .$c;
$print_return=print '<br>' .$d; // returns content of d.
echo '<br>';
if($a==$b){
    echo 'EQUAL';
}
else{
    echo 'UNEQUAL';
}
echo '<br>';
for($i=0;$i<3;$i++){
    echo '*<br>';
}
if(true){
    echo "I'm True";
}
echo '<br>';
$array=[0=>"apple",1=>"orange",2=>"grapes"];
echo $array[0]; //print apple.
echo '<br>';
$student=["190410155"=>"pv","190410555"=>"xy","190610255"=>"op"];
$student=array("190410155"=>"pv","190410555"=>"xy","190610255"=>"op"); //another way of declaring array.
echo $student["190410155"]; //print pv.
echo '<br>';
sort($student);
echo '<pre>'; //preview mode.
print_r($student); //prints the entire array.
var_dump($student); //details.
if(in_array("pv",$student)){
    echo 'Found';
}
else{
    echo 'Not Found';
}
echo'<br>';
echo gmdate('Y-M-D H:i:s');
echo '<br>';
echo gmdate("l,F m,Y");
?>