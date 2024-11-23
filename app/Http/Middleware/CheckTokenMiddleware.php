<?php

namespace App\Http\Middleware;

use Closure;
use Examyou\RestAPI\Exceptions\ApiException;
use App\Models\Token;
use Carbon\Carbon;

class CheckTokenMiddleware
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
        // Get the token from the Authorization header
        $token = $request->bearerToken();

        // Check if the token is present
        if (!$token) {
            throw new ApiException('Token not provided', null, 401);
        }

        $tokenRecord = Token::where('token', $token)->first();

        if (!$tokenRecord) {
            throw new ApiException('Invalid token', null, 401, 401);
        }

        // Check if the token has expired
        if (Carbon::now()->greaterThan($tokenRecord->expires_in)) {
            throw new ApiException('Token has expired', null, 401, 401);
        }

        // Authenticate the user associated with the token
        if (!auth('api')->byId($tokenRecord->user_id)) {
            throw new ApiException('User not authenticated', null, 403, 403);
        }

        // Set the authenticated user manually to avoid overriding other tokens
        $request->setUserResolver(function () use ($tokenRecord) {
            return $tokenRecord->user;
        });

        return $next($request);
    }
}
