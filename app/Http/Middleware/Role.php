<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
            // Проверка аутентификации пользователя
            if (!auth()->check()) {
            return $next($request);
        }

        $id = Auth::id();
        $user = User::find($id);
        // dd($user);
        // Проверка роли пользователя
        if ($user->role_id === 2) {
            abort(403, 'Недостаточно прав.');
        }

        return $next($request);
    }
    }
