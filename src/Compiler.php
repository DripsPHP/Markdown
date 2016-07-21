<?php

namespace Drips\Markdown;

use Drips\Utils\ICompiler;
use Parsedown;

class Compiler implements ICompiler
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
