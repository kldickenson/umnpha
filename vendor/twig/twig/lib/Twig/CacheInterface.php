<?php

use Twig\Cache\CacheInterface;

class_exists('Twig\Cache\CacheInterface');

if (\false) {
    class Twig_CacheInterface extends CacheInterface
    {
    }
}

class_alias('Twig_CacheInterface', 'Twig\Cache\CacheInterface', false);
