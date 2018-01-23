<?php

use Twig\TokenStream;

class_exists('Twig\TokenStream');

if (\false) {
    class Twig_TokenStream extends TokenStream
    {
    }
}

class_alias('Twig_TokenStream', 'Twig\TokenStream', false);
