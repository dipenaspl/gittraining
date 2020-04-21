<?php

require_once __DIR__.'/bootstrap.php';
class area{
    public function calArea($obj){
        return ($obj['width'] * $obj['height']);
    }
}
$objArea = new area();

$function = new \Twig\TwigFilter('calArea',[$objArea, 'calArea']);
$twig->addFilter($function);

echo "<br><br><u>cusFilter2:</u><br>";
echo $twig->render('/templates/cusFilter2.twig');

