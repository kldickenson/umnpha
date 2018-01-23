<?php

use Twig\TemplateWrapper;

class_exists('Twig\TemplateWrapper');

if (\false) {
    class Twig_TemplateWrapper extends TemplateWrapper
    {
    }
}

class_alias('Twig_TemplateWrapper', 'Twig\TemplateWrapper', false);
