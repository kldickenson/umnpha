<?php

use Twig\Node\ModuleNode;

class_exists('Twig\Node\ModuleNode');

if (\false) {
    class Twig_Node_Module extends ModuleNode
    {
    }
}

class_alias('Twig_Node_Module', 'Twig\Node\ModuleNode', false);
