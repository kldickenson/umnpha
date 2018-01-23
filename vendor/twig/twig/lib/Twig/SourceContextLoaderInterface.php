<?php

use Twig\Loader\SourceContextLoaderInterface;

class_exists('Twig\Loader\SourceContextLoaderInterface');

if (\false) {
    class Twig_SourceContextLoaderInterface extends SourceContextLoaderInterface
    {
    }
}

class_alias('Twig_SourceContextLoaderInterface', 'Twig\Loader\SourceContextLoaderInterface', false);
