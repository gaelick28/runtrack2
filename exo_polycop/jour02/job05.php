


<?php

$n =2;
$y =1;




while ($n<=1000 || $y<=10)
if ($y==2 || $y==3 || $y==5 || $y==7)
{
    echo $y ."<br/>";
      $y = $y +1;
}



elseif ($n%2==0 || $n%3==0 || $n%5==0|| $n%7==0 )
{
    $n = $n +1;
    $y = $y +1;
}

else 
{
echo $n ."<br/>";
$n =$n +1;
}


