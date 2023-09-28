<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if 'X-localization' header is present
        if (!$request->hasHeader('X-localization')) {
        return response()->json([
            'status' => 'failed',
            'message' =>trans('msg.localization'),
        ], 400);
        }

         // Check header request and determine localization
         $local = ($request->hasHeader('X-localization')) ? ($request->header('X-localization') ?: 'en') : 'en';
 
         // Set Laravel localization
         App::setLocale($local);
 
         // Continue with the request
         return $next($request);
    }
}
