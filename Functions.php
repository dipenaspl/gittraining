<?php

require_once __DIR__.'/bootstrap.php';

echo "<u>block:</u><br>";
echo $twig->render('/templates/block.twig');

echo "<br><br><u>dump:</u><br>";
echo $twig->render('/templates/dump.twig');

class Post{
    const RSS = 10;
}
const RSS2 = 10;
echo "<br><br><u>const:</u><br>";
echo $twig->render('/templates/const.twig');

echo "<br><br><u>html_classes:</u><br>";
echo $twig->render('/templates/html_classes.twig');

echo "<br><br><u>template_from_string:</u><br>";
echo $twig->render('/templates/template_from_string.twig');
