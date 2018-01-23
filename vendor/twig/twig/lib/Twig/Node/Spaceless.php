<?php

use Twig\Node\SpacelessNode;

class_exists('Twig\Node\SpacelessNode');

if (\false) {
    class Twig_Node_Spaceless extends SpacelessNode
    {
    }
}

class_alias('Twig_Node_Spaceless', 'Twig\Node\SpacelessNode', false);
