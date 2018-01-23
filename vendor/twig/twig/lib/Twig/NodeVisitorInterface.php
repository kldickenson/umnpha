<?php

use Twig\NodeVisitor\NodeVisitorInterface;

class_exists('Twig\NodeVisitor\NodeVisitorInterface');

if (\false) {
    class Twig_NodeVisitorInterface extends NodeVisitorInterface
    {
    }
}

class_alias('Twig_NodeVisitorInterface', 'Twig\NodeVisitor\NodeVisitorInterface', false);
class_exists('Twig_Environment');
class_exists('Twig_Node');
