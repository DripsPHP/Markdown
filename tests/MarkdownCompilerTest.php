<?php

namespace tests;

use Drips\MarkdownCompiler\MarkdownCompiler;
use PHPUnit_Framework_TestCase;

include __DIR__.'/../vendor/autoload.php';

class MarkdownCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
    * @dataProvider dateProvider
    */
   public function testMarkdownCompiler($markdown, $html)
   {
       $this->assertEquals(MarkdownCompiler::compile($markdown), $html);
   }
   public function dateProvider()
   {
       return array(
           array(file_get_contents(__DIR__."/test.md"), file_get_contents(__DIR__."/test.html"))
       );
   }
}
