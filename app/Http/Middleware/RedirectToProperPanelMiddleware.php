<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToProperPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()) {
            $user = auth()->user();

            if($user->hasRole('admin') && $currentPanel !== 'admin') {
                return redirect()->to(Dashboard::getUrl(panel:'admin'));
            } 
            
            if($user->hasRole('organisasi') && $currentPanel !== 'organisasi') {
                return redirect()->to(Dashboard::getUrl(panel:'organisasi'));
            } 
            
            if($user->hasRole('anggota') && $currentPanel !== 'anggota') {
                return redirect()->to(Dashboard::getUrl(panel:'anggota'));
            }
        }
        return $next($request);
    }
}
