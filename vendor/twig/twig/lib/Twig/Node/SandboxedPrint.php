<?php

use Twig\Node\SandboxedPrintNode;

class_exists('Twig\Node\SandboxedPrintNode');

if (\false) {
    class Twig_Node_SandboxedPrint extends SandboxedPrintNode
    {
    }
}

class_alias('Twig_Node_SandboxedPrint', 'Twig\Node\SandboxedPrintNode', false);
