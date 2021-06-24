<?php

namespace App\Http\Middleware;
use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $users= $request->user();
        if($users->role->id === 1)
        {
        return $next($request);
        }
        else
       return redirect('/');
    }
}
