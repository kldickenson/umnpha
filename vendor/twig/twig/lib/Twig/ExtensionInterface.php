<?php

use Twig\Extension\ExtensionInterface;

class_exists('Twig\Extension\ExtensionInterface');

if (\false) {
    class Twig_ExtensionInterface extends ExtensionInterface
    {
    }
}

class_alias('Twig_ExtensionInterface', 'Twig\Extension\ExtensionInterface', false);
class_exists('Twig_Environment');
