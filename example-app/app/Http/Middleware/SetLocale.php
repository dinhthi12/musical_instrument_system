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
        $locale = $request->segment(1); // Lấy ngôn ngữ từ đoạn URL

        if (in_array($locale, ['en', 'ja', 'vi'])) {
            App::setLocale($locale); // Đặt ngôn ngữ
        }
        return $next($request);
    }
}
