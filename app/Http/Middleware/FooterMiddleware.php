<?php

namespace App\Http\Middleware;

use App\Models\Footer;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FooterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $datafooter = Footer::first();
        view()->share('datafooter', $datafooter);
        return $next($request);
    }
}
