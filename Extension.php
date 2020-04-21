<?php

require_once __DIR__.'/bootstrap.php';

class Text{
    public $text='dsf';
    public function getTextVal(){
        return $this->text;
    }
    public function setTextVal($val){
        $this->text = $val;
    }
}
class area{
    public function calArea($obj){
        return ($obj['width'] * $obj['height']);
    }
}
class Project_Twig_Extension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
{
    public function getGlobals(): array{
        return [
            'objText' => new Text()
        ];
    }
    public function getFunctions(){
        return [
            new \Twig\TwigFunction('cleanString', function ($val) { 
                                    return strip_tags(trim($val)); 
                                }),
        ];
    }
    public function getFilters() {
        return [
            new \Twig\TwigFilter('custTrim', function ($val) {
                                    return strip_tags(trim($val));
                                }),
            new \Twig\TwigFilter('calArea', [new area(), 'calArea']),
        ];
    }
    public function getTests(){
        return [
            new \Twig\TwigTest('mode_five', function ($val) {
                                    return (($val%5) == 0);
                                }),
        ];
    }
}

$twig->addExtension(new Project_Twig_Extension());


echo "<br><br><u>Globals:</u><br>";
echo $twig->render('/templates/Globals.twig');

echo "<br><br><u>cusFilter1:</u><br>";
echo $twig->render('/templates/cusFilter1.twig');

echo "<br><br><u>cusFilter2:</u><br>";
echo $twig->render('/templates/cusFilter2.twig');

echo "<br><br><u>cusFunction:</u><br>";
echo $twig->render('/templates/cusFunction.twig');

echo "<br><br><u>cusTest:</u><br>";
echo $twig->render('/templates/cusTest.twig');
