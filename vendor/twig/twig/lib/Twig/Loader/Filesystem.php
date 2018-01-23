<?php

use Twig\Loader\FilesystemLoader;

class_exists('Twig\Loader\FilesystemLoader');

if (\false) {
    class Twig_Loader_Filesystem extends FilesystemLoader
    {
    }
}

class_alias('Twig_Loader_Filesystem', 'Twig\Loader\FilesystemLoader', false);
