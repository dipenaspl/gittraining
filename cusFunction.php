<?php

require_once __DIR__.'/bootstrap.php';

$function = new \Twig\TwigFunction('cleanString', function ($val) {
    return strip_tags(trim($val));
});
$twig->addFunction($function);

echo "<br><br><u>cusFunction:</u><br>";
echo $twig->render('/templates/cusFunction.twig');

