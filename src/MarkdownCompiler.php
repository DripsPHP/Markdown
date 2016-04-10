<?php

namespace Drips\MarkdownCompiler;

use Drips\Utils\ICompiler;
use Parsedown;

class MarkdownCompiler implements ICompiler
{
    private static $compiler;

    public static function compile($string)
    {
        if(static::$compiler == null){
            static::$compiler = new Parsedown;
        }

        return static::$compiler->text($string);
    }
}
