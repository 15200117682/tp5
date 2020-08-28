<?php

namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {
        if (empty($request->get('id'))) {
            $request->code = 1;
            return $next($request);
        }
        return $next($request);
    }
}
