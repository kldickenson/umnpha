<?php

use Twig\Extension\StringLoaderExtension;

class_exists('Twig\Extension\StringLoaderExtension');

if (\false) {
    class Twig_Extension_StringLoader extends StringLoaderExtension
    {
    }
}

/**
 * Loads a template from a string.
 *
 * <pre>
 * {{ include(template_from_string("Hello {{ name }}")) }}
 * </pre>
 *
 * @param Twig_Environment $env      A Twig_Environment instance
 * @param string           $template A template as a string or object implementing __toString()
 *
 * @return Twig_Template
 */
function twig_template_from_string(Twig_Environment $env, $template)
{
    return $env->createTemplate((string) $template);
}

class_alias('Twig_Extension_StringLoader', 'Twig\Extension\StringLoaderExtension', false);
