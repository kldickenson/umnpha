<?php

use Twig\Node\ImportNode;

class_exists('Twig\Node\ImportNode');

if (\false) {
    class Twig_Node_Import extends ImportNode
    {
    }
}

class_alias('Twig_Node_Import', 'Twig\Node\ImportNode', false);
