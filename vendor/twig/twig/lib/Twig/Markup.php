<?php

use Twig\Markup;

class_exists('Twig\Markup');

if (\false) {
    class Twig_Markup extends Markup
    {
    }
}

class_alias('Twig_Markup', 'Twig\Markup', false);
