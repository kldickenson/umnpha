<?php

use Twig\Node\Expression\Test\DivisiblebyTest;

class_exists('Twig\Node\Expression\Test\DivisiblebyTest');

if (\false) {
    class Twig_Node_Expression_Test_Divisibleby extends DivisiblebyTest
    {
    }
}

class_alias('Twig_Node_Expression_Test_Divisibleby', 'Twig\Node\Expression\Test\DivisiblebyTest', false);
