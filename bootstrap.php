<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';
use Twig\Extra\Intl\IntlExtension;
use Twig\Extra\Html\HtmlExtension;
use Twig\Extra\Markdown\MarkdownExtension;
use Twig\Extra\CssInliner\CssInlinerExtension;
use Twig\Extra\Inky\InkyExtension;
use Twig\Extra\String\StringExtension;

// Specify our Twig templates location
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ );

// Instantiate our Twig
$twig = new \Twig\Environment($loader);
$twig->addExtension(new IntlExtension());
$twig->addExtension(new HtmlExtension());
$twig->addExtension(new MarkdownExtension());
$twig->addExtension(new CssInlinerExtension());
$twig->addExtension(new InkyExtension());
$twig->addExtension(new StringExtension());

