<?php
function greet() {
$message = "Hello";
$message .= " World!";
$message .= " The date today is " . date("m/d/Y");
return $message;
}
echo greet();
?>
