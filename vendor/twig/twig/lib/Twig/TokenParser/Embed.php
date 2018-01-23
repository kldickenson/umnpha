<?php

use Twig\TokenParser\EmbedTokenParser;

class_exists('Twig\TokenParser\EmbedTokenParser');

if (\false) {
    class Twig_TokenParser_Embed extends EmbedTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Embed', 'Twig\TokenParser\EmbedTokenParser', false);
