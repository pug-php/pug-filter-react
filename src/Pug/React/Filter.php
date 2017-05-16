<?php

namespace Pug\React;

use NodejsPhpFallback\React;
use Pug\Filter\Script;

class Filter extends Script
{
    protected $textType = 'javascript';

    public function parse($code)
    {
        $react = new React($code);

        return preg_replace(
            '/\n\s+\/\/#\s+sourceMappingURL=.+\.map\s*$/',
            '',
            $react->getResult()
        );
    }
}
