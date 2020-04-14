<?php

require_once __DIR__.'/bootstrap.php';

echo "<br><br><u>abs:</u><br>";
echo $twig->render('/templates/abs.twig');

echo "<br><br><u>batch:</u><br>";
echo $twig->render('/templates/batch.twig');

echo "<br><br><u>capitalize:</u><br>";
echo $twig->render('/templates/capitalize.twig');

echo "<br><br><u>column:</u><br>";
echo $twig->render('/templates/column.twig');

echo "<br><br><u>country_name:</u><br>";
echo $twig->render('/templates/country_name.twig');

echo "<br><br><u>currency_name:</u><br>";
echo $twig->render('/templates/currency_name.twig');

echo "<br><br><u>data_uri:</u><br>";
echo $twig->render('/templates/data_uri.twig');

echo "<br><br><u>date:</u><br>";
echo $twig->render('/templates/date.twig');

echo "<br><br><u>default:</u><br>";
echo $twig->render('/templates/default.twig');

echo "<br><br><u>filter:</u><br>";
echo $twig->render('/templates/filter.twig');

echo "<br><br><u>format_currency:</u><br>";
echo $twig->render('/templates/format_currency.twig');

echo "<br><br><u>html_to_markdown:</u><br>";
echo $twig->render('/templates/html_to_markdown.twig');

echo "<br><br><u>inline_css:</u><br>";
echo $twig->render('/templates/inline_css.twig');

echo "<br><br><u>inky_to_html:</u><br>";
echo $twig->render('/templates/inky_to_html.twig');

echo "<br><br><u>map:</u><br>";
echo $twig->render('/templates/map.twig');

echo "<br><br><u>u:</u><br>";
echo $twig->render('/templates/u.twig');

