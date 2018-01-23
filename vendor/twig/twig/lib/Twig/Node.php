<?php

use Twig\Node\Node;

class_exists('Twig\Node\Node');

if (\false) {
    class Twig_Node extends Node
    {
    }
}

class_alias('Twig_Node', 'Twig\Node\Node', false);
class_exists('Twig_Compiler');
