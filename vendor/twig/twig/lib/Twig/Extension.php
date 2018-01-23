<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

abstract class Twig_Extension implements Twig_ExtensionInterface
{
    /**
     * @deprecated since 1.23 (to be removed in 2.0), implement Twig_Extension_InitRuntimeInterface instead
     */
    public function initRuntime(Twig_Environment $environment)
    {
    }

    public function getTokenParsers()
    {
        return array();
    }

    public function getNodeVisitors()
    {
        return array();
    }

    public function getFilters()
    {
        return array();
    }

class_exists('Twig\Extension\AbstractExtension');

if (\false) {
    class Twig_Extension extends AbstractExtension
    {
    }
}

class_alias('Twig_Extension', 'Twig\Extension\AbstractExtension', false);
class_exists('Twig_Environment');
