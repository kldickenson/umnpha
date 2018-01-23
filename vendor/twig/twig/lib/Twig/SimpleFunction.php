<?php

use Twig\TwigFunction;

class_exists('Twig\TwigFunction');

if (\false) {
    class Twig_SimpleFunction extends TwigFunction
    {
    }
}

class_alias('Twig_SimpleFunction', 'Twig\TwigFunction', false);
