<?php

use Twig\Source;

class_exists('Twig\Source');

if (\false) {
    class Twig_Source extends Source
    {
    }
}

class_alias('Twig_Source', 'Twig\Source', false);
