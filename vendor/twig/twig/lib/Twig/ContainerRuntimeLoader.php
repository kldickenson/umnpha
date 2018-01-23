<?php

use Twig\RuntimeLoader\ContainerRuntimeLoader;

class_exists('Twig\RuntimeLoader\ContainerRuntimeLoader');

if (\false) {
    class Twig_ContainerRuntimeLoader extends ContainerRuntimeLoader
    {
    }
}

class_alias('Twig_ContainerRuntimeLoader', 'Twig\RuntimeLoader\ContainerRuntimeLoader', false);
