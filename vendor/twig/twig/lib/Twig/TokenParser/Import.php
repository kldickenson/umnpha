<?php

use Twig\TokenParser\ImportTokenParser;

class_exists('Twig\TokenParser\ImportTokenParser');

if (\false) {
    class Twig_TokenParser_Import extends ImportTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Import', 'Twig\TokenParser\ImportTokenParser', false);
