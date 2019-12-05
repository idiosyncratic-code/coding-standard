<?php

declare(strict_types=1);

namespace Idiosyncratic\CodingStandard;

use Idiosyncratic\EditorConfig\EditorConfig;

abstract class EditorConfigLoader
{
    /** @var EditorConfig */
    private static $editorConfig;

    public static function instance() : EditorConfig
    {
        if (self::$editorConfig instanceof EditorConfig) {
            return self::$editorConfig;
        }

        return self::$editorConfig = new EditorConfig();
    }
}
