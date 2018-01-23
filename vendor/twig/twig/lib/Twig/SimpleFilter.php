<?php

use Twig\TwigFilter;

class_exists('Twig\TwigFilter');

if (\false) {
    class Twig_SimpleFilter extends TwigFilter
    {
    }
}

class_alias('Twig_SimpleFilter', 'Twig\TwigFilter', false);
