<?php

use Psr7Middlewares\Middleware;

return [

    'globalMiddleware' => [
        Middleware::responseTime(),

        Middleware::payload(),
    ],

    /**
     * Registered Middleware
     *
     * Create a class map using the middleware's `handle` as a key and the middleware
     * class as the value. Middleware can also be registered with the
     * `registerHttpMessageMiddlewareHandle` and `registerHttpMessagesMiddlewareClass` hooks
     * in a plugin.
     *
     */
    'registeredMiddleware' => [
        'cache'      => 'Craft\\HttpMessages_CacheMiddleware',
        'csrf'       => 'Craft\\HttpMessages_CsrfMiddleware',
        'fractal'    => 'Craft\\HttpMessages_FractalMiddleware',
        'validation' => 'Craft\\HttpMessages_ValidationMiddleware',
    ],

    /**
     * Default Headers
     *
     * The default headers to be attached to http responses for various content types.
     */
    'headers' => [

        'html' => [
            'Content-Type' => [
                'text/html; charset=utf-8',
            ],
        ],

        'json' => [
            'Pragma'        => [
                'no-cache',
            ],
            'Cache-Control' => [
                'no-store',
                'no-cache',
                'must-revalidate',
                'post-check=0',
                'pre-check=0',
            ],
            'Content-Type' => [
                'application/json; charset=utf-8',
            ],
        ],

        'xml'  => [
            'Content-Type' => [
                'text/xml; charset=utf-8',
            ],
        ],

    ],

];
