<?php

use Twig\Extension\OptimizerExtension;

class_exists('Twig\Extension\OptimizerExtension');

if (\false) {
    class Twig_Extension_Optimizer extends OptimizerExtension
    {
    }
}

class_alias('Twig_Extension_Optimizer', 'Twig\Extension\OptimizerExtension', false);
