<?php

use Twig\Error\Error;

class_exists('Twig\Error\Error');

if (\false) {
    class Twig_Error extends Error
    {
        $template = null;
        $templateClass = null;

        if (PHP_VERSION_ID >= 50306) {
            $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS | DEBUG_BACKTRACE_PROVIDE_OBJECT);
        } else {
            $backtrace = debug_backtrace();
        }

        foreach ($backtrace as $trace) {
            if (isset($trace['object']) && $trace['object'] instanceof Twig_Template && 'Twig_Template' !== get_class($trace['object'])) {
                $currentClass = get_class($trace['object']);
                $isEmbedContainer = 0 === strpos($templateClass, $currentClass);
                if (null === $this->filename || ($this->filename == $trace['object']->getTemplateName() && !$isEmbedContainer)) {
                    $template = $trace['object'];
                    $templateClass = get_class($trace['object']);
                }
            }
        }

        // update template name
        if (null !== $template && null === $this->filename) {
            $this->filename = $template->getTemplateName();
        }

        // update template path if any
        if (null !== $template && null === $this->sourcePath) {
            $src = $template->getSourceContext();
            $this->sourceCode = $src->getCode();
            $this->sourcePath = $src->getPath();
        }

        if (null === $template || $this->lineno > -1) {
            return;
        }

        $r = new ReflectionObject($template);
        $file = $r->getFileName();

        $exceptions = array($e = $this);
        while (($e instanceof self || method_exists($e, 'getPrevious')) && $e = $e->getPrevious()) {
            $exceptions[] = $e;
        }

        while ($e = array_pop($exceptions)) {
            $traces = $e->getTrace();
            array_unshift($traces, array('file' => $e->getFile(), 'line' => $e->getLine()));

            while ($trace = array_shift($traces)) {
                if (!isset($trace['file']) || !isset($trace['line']) || $file != $trace['file']) {
                    continue;
                }

                foreach ($template->getDebugInfo() as $codeLine => $templateLine) {
                    if ($codeLine <= $trace['line']) {
                        // update template line
                        $this->lineno = $templateLine;

                        return;
                    }
                }
            }
        }
    }
}

class_alias('Twig_Error', 'Twig\Error\Error', false);
class_exists('Twig_Source');
