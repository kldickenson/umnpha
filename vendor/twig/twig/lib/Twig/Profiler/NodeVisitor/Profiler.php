<?php

use Twig\Profiler\NodeVisitor\ProfilerNodeVisitor;

class_exists('Twig\Profiler\NodeVisitor\ProfilerNodeVisitor');

if (\false) {
    class Twig_Profiler_NodeVisitor_Profiler extends ProfilerNodeVisitor
    {
    }
}

class_alias('Twig_Profiler_NodeVisitor_Profiler', 'Twig\Profiler\NodeVisitor\ProfilerNodeVisitor', false);
