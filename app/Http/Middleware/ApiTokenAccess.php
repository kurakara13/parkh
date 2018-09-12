<?php

namespace App\Http\Middleware;

use Closure;

class ApiTokenAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      $token = $request->header('Content-Type');
      
      if ($token == null) {
          /** return response()->json(['error' => 'Unauthenticated.'], 401); */

            $response = ['status' => 'error','message' => 'You pass invalid token'];

            return response()->json($response);

      };
      return $next($request);
    }
}
