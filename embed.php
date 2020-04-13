<?php

require_once __DIR__.'/bootstrap.php';

echo "<br><br><u>embed:</u><br>";
echo $twig->render('embed_child/child_template.html');
