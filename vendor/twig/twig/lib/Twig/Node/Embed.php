<?php

use Twig\Node\EmbedNode;

class_exists('Twig\Node\EmbedNode');

if (\false) {
    class Twig_Node_Embed extends EmbedNode
    {
    }
}

class_alias('Twig_Node_Embed', 'Twig\Node\EmbedNode', false);
