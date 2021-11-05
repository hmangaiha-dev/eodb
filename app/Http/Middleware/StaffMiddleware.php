<?php

namespace App\Http\Middleware;

use App\Models\Staff;
use Closure;
use Illuminate\Http\Request;

class StaffMiddleware
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
        $user = auth('sanctum')->user();
        if (blank($user)) {
            abort(401,'Access denied');
        }
        if (!($user instanceof Staff)) {
            abort(403,'Unauthorized access');
        }
        return $next($request);
    }
}
