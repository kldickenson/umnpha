<?php

use Twig\Profiler\Dumper\HtmlDumper;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Twig_Profiler_Dumper_Html extends Twig_Profiler_Dumper_Base
{
    private static $colors = array(
        'block' => '#dfd',
        'macro' => '#ddf',
        'template' => '#ffd',
        'big' => '#d44',
    );

if (\false) {
    class Twig_Profiler_Dumper_Html extends HtmlDumper
    {
    }
}

class_alias('Twig_Profiler_Dumper_Html', 'Twig\Profiler\Dumper\HtmlDumper', false);
