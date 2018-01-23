<?php

use Twig\TokenParser\SpacelessTokenParser;

class_exists('Twig\TokenParser\SpacelessTokenParser');

if (\false) {
    class Twig_TokenParser_Spaceless extends SpacelessTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Spaceless', 'Twig\TokenParser\SpacelessTokenParser', false);
