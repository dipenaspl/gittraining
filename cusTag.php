<?php

require_once __DIR__.'/bootstrap.php';

class Project_Set_TokenParser extends \Twig\TokenParser\AbstractTokenParser
{
    public function parse(\Twig\Token $token){
        $parser = $this->parser;
        $stream = $parser->getStream();

        $name = $stream->expect(\Twig\Token::NAME_TYPE)->getValue();
        $stream->expect(\Twig\Token::OPERATOR_TYPE, '=');
        $value = $parser->getExpressionParser()->parseExpression();
        $stream->expect(\Twig\Token::BLOCK_END_TYPE);

        return new Project_Set_Node($name, $value, $token->getLine(), $this->getTag());
    }
    public function getTag(){
        return 'set123';
    }
}
class Project_Set_Node extends \Twig\Node\Node{
    public function __construct($name, \Twig\Node\Expression\AbstractExpression $value, $line, $tag = null){
        parent::__construct(['value' => $value], ['name' => $name], $line, $tag);
    }
    public function compile(\Twig\Compiler $compiler){
        $compiler
            ->addDebugInfo($this)
            ->write('$context[\''.$this->getAttribute('name').'\'] = ')
            ->subcompile($this->getNode('value'))
            ->raw(";\n")
        ;
    }
}

$twig->addTokenParser(new Project_Set_TokenParser());





echo "<br><br><u>cusTag:</u><br>";
echo $twig->render('/templates/cusTag.twig');

