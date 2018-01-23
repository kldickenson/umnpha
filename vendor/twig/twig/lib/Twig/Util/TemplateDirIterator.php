<?php

use Twig\Util\TemplateDirIterator;

class_exists('Twig\Util\TemplateDirIterator');

if (\false) {
    class Twig_Util_TemplateDirIterator extends TemplateDirIterator
    {
    }
}

class_alias('Twig_Util_TemplateDirIterator', 'Twig\Util\TemplateDirIterator', false);
