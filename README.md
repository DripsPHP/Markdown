# Markdown

[![Build Status](https://travis-ci.org/Prowect/MarkdownCompiler.svg)](https://travis-ci.org/Prowect/MarkdownCompiler)
[![Code Climate](https://codeclimate.com/github/Prowect/MarkdownCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MarkdownCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MarkdownCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MarkdownCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Markdown.svg)](https://packagist.org/packages/drips/markdown)

Mithilfe des MarkdownCompilers kann Markdown in HTML übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\Markdown\Compiler;

$markdown_file = "path/to/file.md";
$html_file = "path/to/file.html";

// Inhalt der Markdown-Datei auslesen
$markdown = file_get_contents($markdown_file);
// Markdown mithilfe des Compilers in HTML übersetzen
$html = Compiler::compile($markdown);
// HTML-Code in die jeweilige Datei schreiben
file_put_contents($html_file, $html);
```
