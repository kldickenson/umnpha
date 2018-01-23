<?php

use Twig\NodeVisitor\EscaperNodeVisitor;

class_exists('Twig\NodeVisitor\EscaperNodeVisitor');

if (\false) {
    class Twig_NodeVisitor_Escaper extends EscaperNodeVisitor
    {
    }
}

class_alias('Twig_NodeVisitor_Escaper', 'Twig\NodeVisitor\EscaperNodeVisitor', false);
