<?php

use Twig\Extension\InitRuntimeInterface;

class_exists('Twig\Extension\InitRuntimeInterface');

if (\false) {
    class Twig_Extension_InitRuntimeInterface extends InitRuntimeInterface
    {
    }
}

class_alias('Twig_Extension_InitRuntimeInterface', 'Twig\Extension\InitRuntimeInterface', false);
