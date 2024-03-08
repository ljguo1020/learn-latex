<?php
namespace app\middleware;

class CorsMiddleware
{
    public function handle($request, \Closure $next)
    {
        $response = $next($request);
        return $response;
    }
}