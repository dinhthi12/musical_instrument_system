<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1); // Get the first segment from the URL

        // Validate if the obtained locale is a valid language code
        $validLocales = ['vi', 'en', 'ja']; // Add other valid language codes
        $locale = in_array($locale, $validLocales) ? $locale : 'vi';

        App::setLocale($locale);

        // Pass the locale to the session if needed
        session(['locale' => $locale]);

        return $next($request);
    }
}
