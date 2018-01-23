<?php

use Twig\Cache\NullCache;

class_exists('Twig\Cache\NullCache');

if (\false) {
    class Twig_Cache_Null extends NullCache
    {
    }
}

class_alias('Twig_Cache_Null', 'Twig\Cache\NullCache', false);
