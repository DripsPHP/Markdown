<?php

namespace Drips\Markdown;

use Drips\Utils\ICompiler;
use Parsedown;

/**
 * Class Compiler
 *
 * Diese Klasse bietet eine einheitliche Schnittstelle (ICompiler) zu Übersetzen von Markdown- in HTML-Code.
 * Als Compiler wird Parsedown verwendet. (siehe http://parsedown.org)
 *
 * @package Drips\Markdown
 */
class Compiler implements ICompiler
{
    /**
     * Beinhaltet den eigentlichen Parsedown-Compiler (Objekt).
     *
     * @var Parsedown
     */
    private static $compiler;

    /**
     * Der übergebene String (Markdown-Code) wird in HTML-Code übersetzt und anschließend als String zurückgeliefert.
     *
     * @param $string
     *
     * @return string
     */
    public static function compile($string)
    {
        if (static::$compiler == null) {
            static::$compiler = new Parsedown;
        }

        return static::$compiler->text($string);
    }
}
