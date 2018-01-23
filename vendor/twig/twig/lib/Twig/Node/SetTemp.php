<?php

use Twig\Node\SetTempNode;

/**
 * @internal
 */
class Twig_Node_SetTemp extends Twig_Node
{
    public function __construct($name, $lineno)
    {
        parent::__construct(array(), array('name' => $name), $lineno);
    }

if (\false) {
    class Twig_Node_SetTemp extends SetTempNode
    {
    }
}

class_alias('Twig_Node_SetTemp', 'Twig\Node\SetTempNode', false);
