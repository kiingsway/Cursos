<?php

$data = "23/05/2018";
echo $data;
echo "<br>";
$data = implode("-", array_reverse(explode("/", $data)));
echo $data;

?>