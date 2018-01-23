<?php

use Twig\TokenParser\FlushTokenParser;

class_exists('Twig\TokenParser\FlushTokenParser');

if (\false) {
    class Twig_TokenParser_Flush extends FlushTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Flush', 'Twig\TokenParser\FlushTokenParser', false);
