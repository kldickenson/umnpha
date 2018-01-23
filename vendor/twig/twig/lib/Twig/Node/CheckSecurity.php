<?php

use Twig\Node\CheckSecurityNode;

class_exists('Twig\Node\CheckSecurityNode');

if (\false) {
    class Twig_Node_CheckSecurity extends CheckSecurityNode
    {
    }
}

class_alias('Twig_Node_CheckSecurity', 'Twig\Node\CheckSecurityNode', false);
