<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a ="apple";
if($a == 'mango'){
  echo "this is mango";
}elseif($a =='apple'){
echo "this is apple";
}else if($a=='orange'){
  echo "this is orange";
}else{
  echo"condition is not true";
}


    ?>



<br>


<?php
$Counter=0;
while( $Counter <= 5){
$CounterB = 0;
while($CounterB <= $Counter){
    echo "*";
    $CounterB++;
}
echo'<br/>';
$Counter++;
}

?>
<br>
</body>
</html>