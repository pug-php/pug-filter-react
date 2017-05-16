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
        $js = $react->getResult();

        return preg_replace('/\n\s+\/\/#\s+sourceMappingURL=.+\.map\s*$/', '', $js);
    }
}
