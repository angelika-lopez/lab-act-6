<?php
$un=$argv[1];
$ua=$argv[2];

function ageverifier($ua){
    return date("Y")-$ua;
};

echo "Your name is " . $un . ", and your age is " . ageverifier($ua);

if (ageverifier($ua) >= 18) {
    echo "\nYou are a voter.";
};

if (ageverifier($ua) >= 60) {
    echo "\nYou are a senior citizen.";
};
?>