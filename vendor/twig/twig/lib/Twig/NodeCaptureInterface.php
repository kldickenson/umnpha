<?php

use Twig\Node\NodeCaptureInterface;

class_exists('Twig\Node\NodeCaptureInterface');

if (\false) {
    class Twig_NodeCaptureInterface extends NodeCaptureInterface
    {
    }
}

class_alias('Twig_NodeCaptureInterface', 'Twig\Node\NodeCaptureInterface', false);
