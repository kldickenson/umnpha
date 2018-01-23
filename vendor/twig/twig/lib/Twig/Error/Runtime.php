<?php

use Twig\Error\RuntimeError;

class_exists('Twig\Error\RuntimeError');

if (\false) {
    class Twig_Error_Runtime extends RuntimeError
    {
    }
}

class_alias('Twig_Error_Runtime', 'Twig\Error\RuntimeError', false);
