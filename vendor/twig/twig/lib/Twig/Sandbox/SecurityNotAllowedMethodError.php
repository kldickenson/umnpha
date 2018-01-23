<?php

use Twig\Sandbox\SecurityNotAllowedMethodError;

class_exists('Twig\Sandbox\SecurityNotAllowedMethodError');

if (\false) {
    class Twig_Sandbox_SecurityNotAllowedMethodError extends SecurityNotAllowedMethodError
    {
    }
}

class_alias('Twig_Sandbox_SecurityNotAllowedMethodError', 'Twig\Sandbox\SecurityNotAllowedMethodError', false);
