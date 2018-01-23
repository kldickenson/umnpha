<?php

use Twig\Extension\DebugExtension;

/**
 * @final
 */
class Twig_Extension_Debug extends Twig_Extension
{
    public function getFunctions()
    {
        // dump is safe if var_dump is overridden by xdebug
        $isDumpOutputHtmlSafe = extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === PHP_SAPI
        ;

        return array(
            new Twig_SimpleFunction('dump', 'twig_var_dump', array('is_safe' => $isDumpOutputHtmlSafe ? array('html') : array(), 'needs_context' => true, 'needs_environment' => true)),
        );
    }

if (\false) {
    class Twig_Extension_Debug extends DebugExtension
    {
    }
}

class_alias('Twig_Extension_Debug', 'Twig\Extension\DebugExtension', false);
