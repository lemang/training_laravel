<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\UserRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class RoleBasedAccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {

      
        
        $rolecode = $request->user()->role ? $request->user()->role->code : '';

        if(!$rolecode){
            $inroles = UserRole::where('user_id', $request->user()->id)->whereHas('role', function($q) use ($roles){
                // dd($roles);
                $q->whereIn('code', $roles);
            })->first();

            if(!$inroles){
                abort(403, 'Unauthorized action.');
            }
            session(['role' => $inroles->role_id]);
            $rolecode = $inroles->role->code;

      
        }
        if (!in_array($rolecode, $roles))    
        {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
