<?php

use Twig\TokenParser\BlockTokenParser;

class_exists('Twig\TokenParser\BlockTokenParser');

if (\false) {
    class Twig_TokenParser_Block extends BlockTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Block', 'Twig\TokenParser\BlockTokenParser', false);
