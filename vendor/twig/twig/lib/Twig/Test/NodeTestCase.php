<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

abstract class Twig_Test_NodeTestCase extends TestCase
{
    abstract public function getTests();

class_exists('Twig\Test\NodeTestCase');

if (\false) {
    class Twig_Test_NodeTestCase extends NodeTestCase
    {
    }
}

class_alias('Twig_Test_NodeTestCase', 'Twig\Test\NodeTestCase', false);
class_exists('Twig_Environment');
class_exists('Twig_Node');
