<?php

declare(strict_types=1);

namespace Idiosyncratic\CodingStandard\Sniffs;

use Idiosyncratic\CodingStandard\EditorConfigLoader;
use Idiosyncratic\EditorConfig\EditorConfig;
use PHP_CodeSniffer\Config;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;

class ScopeIndentSniff implements Sniff
{
    /** @var EditorConfig */
    private static $editorConfig;

    public function __construct()
    {
        $this->editorConfig = EditorConfigLoader::instance();
    }

    /**
     * @inheritdoc
     */
    public function register() : array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function process(File $phpcsFile, $stackPtr) : int
    {
        return $phpcsFile->numTokens;
    }
}
