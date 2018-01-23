<?php

use Twig\Loader\LoaderInterface;

class_exists('Twig\Loader\LoaderInterface');

if (\false) {
    class Twig_LoaderInterface extends LoaderInterface
    {
    }
}

class_alias('Twig_LoaderInterface', 'Twig\Loader\LoaderInterface', false);
