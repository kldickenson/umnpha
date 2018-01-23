<?php

use Twig\Error\LoaderError;

class_exists('Twig\Error\LoaderError');

if (\false) {
    class Twig_Error_Loader extends LoaderError
    {
    }
}

class_alias('Twig_Error_Loader', 'Twig\Error\LoaderError', false);
