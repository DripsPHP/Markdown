<?php

namespace Drips\MarkdownCompiler;

use Drips\Utils\ICompiler;

class MarkdownCompiler implements ICompiler
{
    public static function compile($string)
    {
        $Parsedown = new MarkdownCompiler();
        return $Parsedown->text($string);
    }
}
