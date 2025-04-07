<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Quantri
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Vui lòng đăng nhập!');
        }
        if (Auth::user()->idgroup != 1) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập!');
        }
        return $next($request);
    }
}