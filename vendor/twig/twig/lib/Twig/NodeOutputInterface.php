<?php

use Twig\Node\NodeOutputInterface;

class_exists('Twig\Node\NodeOutputInterface');

if (\false) {
    class Twig_NodeOutputInterface extends NodeOutputInterface
    {
    }
}

class_alias('Twig_NodeOutputInterface', 'Twig\Node\NodeOutputInterface', false);
