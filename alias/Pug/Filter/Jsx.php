<?php

namespace Pug\Filter;

use NodejsPhpFallback\React as ReactPhpEngine;

class Jsx extends Script
{
    protected $textType = 'javascript';

    public function parse($code)
    {
        return new ReactPhpEngine($code);
    }
}
