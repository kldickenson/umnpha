<?php

use Twig\Parser;

class_exists('Twig\Parser');

if (\false) {
    class Twig_Parser extends Parser
    {
    }
}

class_alias('Twig_Parser', 'Twig\Parser', false);
class_exists('Twig_Node');
class_exists('Twig_TokenStream');
