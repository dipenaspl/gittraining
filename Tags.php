<?php

require_once __DIR__.'/bootstrap.php';

$parameters = array('my_var' => 'Hello world !!!');

// Render our view
echo "<br><br><u>apply:</u><br>";
echo $twig->render('apply.html.twig', $parameters);

echo "<br><br><u>autoescape:</u><br>";
echo $twig->render('autoescape.twig');

echo "<br><br><u>deprecated:</u><br>";
echo $twig->render('deprecated.html.twig');

echo "<br><br><u>do:</u><br>";
echo $twig->render('do.twig');

echo "<br><br><u>include:</u><br>";
echo $twig->render('include.twig');

echo "<br><br><u>for:</u><br>";
$data['users'][] = array('username' => 'user1');
$data['users'][] = array('username' => 'user2');
$data['users'][] = array('username' => 'user3');
echo $twig->render('for.twig', $data);

echo "<br><br><u>macro:</u><br>";
echo $twig->render('macro.twig');

echo "<br><br><u>verbatim:</u><br>";
echo $twig->render('verbatim.twig');
