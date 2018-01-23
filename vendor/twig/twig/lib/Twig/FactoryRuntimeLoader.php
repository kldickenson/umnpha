<?php

use Twig\RuntimeLoader\FactoryRuntimeLoader;

class_exists('Twig\RuntimeLoader\FactoryRuntimeLoader');

if (\false) {
    class Twig_FactoryRuntimeLoader extends FactoryRuntimeLoader
    {
    }
}

class_alias('Twig_FactoryRuntimeLoader', 'Twig\RuntimeLoader\FactoryRuntimeLoader', false);
