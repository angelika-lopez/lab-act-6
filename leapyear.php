<?php
for ($n=4; $n<=2024; $n+=4){
    if (($n % 4==0 && $n % 100!=0) || $n % 400==0){
        echo $n;
        echo "\n";
    }
}
?>