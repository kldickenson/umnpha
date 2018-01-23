<?php

use Twig\Extension\GlobalsInterface;

class_exists('Twig\Extension\GlobalsInterface');

if (\false) {
    class Twig_Extension_GlobalsInterface extends GlobalsInterface
    {
    }
}

class_alias('Twig_Extension_GlobalsInterface', 'Twig\Extension\GlobalsInterface', false);
