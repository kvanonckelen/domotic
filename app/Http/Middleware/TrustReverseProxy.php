<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;

class TrustReverseProxy extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // or ['10.0.0.1'] for specific IPs

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    //protected $headers = Request::HEADER_X_FORWARDED_ALL;
    protected $headers = 0;
}

