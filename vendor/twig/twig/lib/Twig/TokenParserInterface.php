<?php

use Twig\TokenParser\TokenParserInterface;

class_exists('Twig\TokenParser\TokenParserInterface');

if (\false) {
    class Twig_TokenParserInterface extends TokenParserInterface
    {
    }
}

class_alias('Twig_TokenParserInterface', 'Twig\TokenParser\TokenParserInterface', false);
class_exists('Twig_Parser');
class_exists('Twig_Token');
