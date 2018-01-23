<?php

use Twig\Profiler\Node\EnterProfileNode;

class_exists('Twig\Profiler\Node\EnterProfileNode');

if (\false) {
    class Twig_Profiler_Node_EnterProfile extends EnterProfileNode
    {
    }
}

class_alias('Twig_Profiler_Node_EnterProfile', 'Twig\Profiler\Node\EnterProfileNode', false);
