<?php

namespace tests;

use Drips\Markdown\Compiler;
use PHPUnit_Framework_TestCase;

class MarkdownCompilerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Testfall zur Überprüfung ob Markdown-Code entsprechend in HTML-Code richtig übersetzt wird.
     *
     * @dataProvider dataProvider
     */
    public function testMarkdownCompiler($markdown, $html)
    {
        $this->assertEquals(Compiler::compile($markdown), $html);
    }

    /**
     * Stellt Testdaten (Markdown- und HTML-Code) zur Verfügung
     *
     * @return array
     */
    public function dataProvider()
    {
        return array(
            array(file_get_contents(__DIR__ . "/test.md"), file_get_contents(__DIR__ . "/test.html"))
        );
    }
}
