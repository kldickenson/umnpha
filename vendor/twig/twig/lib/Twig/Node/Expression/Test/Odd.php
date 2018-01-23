<?php

use Twig\Node\Expression\Test\OddTest;

class_exists('Twig\Node\Expression\Test\OddTest');

if (\false) {
    class Twig_Node_Expression_Test_Odd extends OddTest
    {
    }
}

class_alias('Twig_Node_Expression_Test_Odd', 'Twig\Node\Expression\Test\OddTest', false);
