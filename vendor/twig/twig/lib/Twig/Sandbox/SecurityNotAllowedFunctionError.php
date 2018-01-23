<?php

use Twig\Sandbox\SecurityNotAllowedFunctionError;

class_exists('Twig\Sandbox\SecurityNotAllowedFunctionError');

if (\false) {
    class Twig_Sandbox_SecurityNotAllowedFunctionError extends SecurityNotAllowedFunctionError
    {
    }
}

class_alias('Twig_Sandbox_SecurityNotAllowedFunctionError', 'Twig\Sandbox\SecurityNotAllowedFunctionError', false);
