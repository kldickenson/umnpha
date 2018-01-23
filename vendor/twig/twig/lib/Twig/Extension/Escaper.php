<?php

use Twig\Extension\EscaperExtension;

class_exists('Twig\Extension\EscaperExtension');

if (\false) {
    class Twig_Extension_Escaper extends EscaperExtension
    {
    }
}

class_alias('Twig_Extension_Escaper', 'Twig\Extension\EscaperExtension', false);
