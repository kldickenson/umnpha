<?php

use Twig\NodeVisitor\SandboxNodeVisitor;

class_exists('Twig\NodeVisitor\SandboxNodeVisitor');

if (\false) {
    class Twig_NodeVisitor_Sandbox extends SandboxNodeVisitor
    {
    }
}

class_alias('Twig_NodeVisitor_Sandbox', 'Twig\NodeVisitor\SandboxNodeVisitor', false);
