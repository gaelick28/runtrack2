
<?php

$n=1;

while ($n<= 100) {
        if ($n%3==0 && $n%5==0)

    {
        echo "FizzBuzz"."<br/>";
        $n = $n +1;
    }
       
    elseif ($n%3==0) 
    {
        echo "Fizz"."<br/>";
        $n = $n +1;
    }

 elseif ($n%5==0)
    {
        echo "Buzz"."<br/>";
        $n = $n +1;
    }
        
    


        else 
{
    echo $n ."<br/>";
    $n =$n +1;
}

}