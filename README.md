# Markdown

[![Build Status](https://travis-ci.org/Prowect/MarkdownCompiler.svg)](https://travis-ci.org/Prowect/MarkdownCompiler)
[![Code Climate](https://codeclimate.com/github/Prowect/MarkdownCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MarkdownCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MarkdownCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MarkdownCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Markdown.svg)](https://packagist.org/packages/drips/markdown)

Mithilfe des MarkdownCompilers kann Markdown in HTML übersetzt werden. Dies funktioniert wie folgt:

```php
<?php

use Drips\Markdown\Compiler;

// Markdown mithilfe des Compilers in HTML übersetzen
$html_code = Compiler::compile($markdown_code);
```
