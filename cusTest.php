<?php

require_once __DIR__.'/bootstrap.php';

$function = new \Twig\TwigTest('mode_five', function ($val) {
    
    return (($val%5) == 0);
});
$twig->addTest($function);

echo "<br><br><u>cusTest:</u><br>";
echo $twig->render('/templates/cusTest.twig');

