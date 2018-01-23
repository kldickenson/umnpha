<?php

use Twig\NodeVisitor\SafeAnalysisNodeVisitor;

class_exists('Twig\NodeVisitor\SafeAnalysisNodeVisitor');

if (\false) {
    class Twig_NodeVisitor_SafeAnalysis extends SafeAnalysisNodeVisitor
    {
    }
}

class_alias('Twig_NodeVisitor_SafeAnalysis', 'Twig\NodeVisitor\SafeAnalysisNodeVisitor', false);
