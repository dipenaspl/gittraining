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
$obj = new Text();
$twig->addGlobal('objText', $obj);
echo "<br><br><u>Globals:</u><br>";
echo $twig->render('/templates/Globals.twig');

echo $obj->getTextVal();
