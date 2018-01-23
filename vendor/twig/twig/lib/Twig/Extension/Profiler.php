<?php

use Twig\Extension\ProfilerExtension;

class_exists('Twig\Extension\ProfilerExtension');

if (\false) {
    class Twig_Extension_Profiler extends ProfilerExtension
    {
    }
}

class_alias('Twig_Extension_Profiler', 'Twig\Extension\ProfilerExtension', false);
class_exists('Twig_Profiler_Profile');
