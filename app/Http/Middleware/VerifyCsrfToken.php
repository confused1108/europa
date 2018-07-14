<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/user/register/first',
        '/user/organizations',
        '/user/register/second',
        '/user/login',
        '/user/complaints',
        '/user/complaints/register',
        '/user/complaints/previous',
        '/user/complaints/status',
        '/user/leave/apply',
        '/user/leave/previous',
        '/user/leave/'
    ];
}
