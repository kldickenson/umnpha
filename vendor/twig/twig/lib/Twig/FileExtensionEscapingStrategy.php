<?php

use Twig\FileExtensionEscapingStrategy;

class_exists('Twig\FileExtensionEscapingStrategy');

if (\false) {
    class Twig_FileExtensionEscapingStrategy extends FileExtensionEscapingStrategy
    {
    }
}

class_alias('Twig_FileExtensionEscapingStrategy', 'Twig\FileExtensionEscapingStrategy', false);
