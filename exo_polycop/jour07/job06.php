<?php

function leetSpeak($str){
    $mot = strlen($str);
    for($n=0; $n < $mot; $n = $n+1){
        if ($str[$n] == "a"){ 
                $str[$n] = "4";
    }

        if ($str[$n] == "b"){ 
                $str[$n] = "8";
        }
        if ($str[$n] == "e"){ 
            $str[$n] = "3";
        }
        if ($str[$n] == "g"){ 
            $str[$n] = "6";
        }
        if ($str[$n] == "l"){ 
            $str[$n] = "1";
        }
        if ($str[$n] == "s"){ 
                $str[$n] = "5";
        }
        if ($str[$n] == "t"){ 
            $str[$n] = "7";
         }
        }
        return $str;
        }


$Textemodifié = leetSpeak("Allez l'Olympique Lyonnais");
echo $Textemodifié;
?>
