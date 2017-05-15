<?php

namespace Pug\Filter;

use NodejsPhpFallback\React as ReactPhpEngine;

class React extends Script
{
    protected $textType = 'javascript';

    public function parse($code)
    {
        return new ReactPhpEngine($code);
    }
}
