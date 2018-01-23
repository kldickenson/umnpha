<?php

use Twig\NodeVisitor\AbstractNodeVisitor;

class_exists('Twig\NodeVisitor\AbstractNodeVisitor');

if (\false) {
    class Twig_BaseNodeVisitor extends AbstractNodeVisitor
    {
    }
}

class_alias('Twig_BaseNodeVisitor', 'Twig\NodeVisitor\AbstractNodeVisitor', false);
class_exists('Twig_Environment');
class_exists('Twig_Node');
