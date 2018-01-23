<?php

use Twig\Sandbox\SecurityNotAllowedTagError;

class_exists('Twig\Sandbox\SecurityNotAllowedTagError');

if (\false) {
    class Twig_Sandbox_SecurityNotAllowedTagError extends SecurityNotAllowedTagError
    {
    }
}

class_alias('Twig_Sandbox_SecurityNotAllowedTagError', 'Twig\Sandbox\SecurityNotAllowedTagError', false);
