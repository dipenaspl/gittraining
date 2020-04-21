<?php

require_once __DIR__.'/bootstrap.php';

$function = new \Twig\TwigFilter('custTrim', function ($val) {
    return strip_tags(trim($val));
});
$twig->addFilter($function);

echo "<br><br><u>cusFilter1:</u><br>";
echo $twig->render('/templates/cusFilter1.twig');

