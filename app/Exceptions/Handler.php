<?php

namespace App\Exceptions;

use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        //if user not login or session invalid
        $this->renderable(function (UnauthorizedException $e, Request $request) {
            // If the request expects JSON, you can return a JSON response
            if ($request->expectsJson()) {
                return response()->json([
                    'responseMessage' => 'You do not have the required authorization.',
                    'responseStatus' => 403,
                ], 403);
            }

            // For web requests, redirect them
            return redirect()->route('getLoginPage')->with('error', 'You do not have permission to access this page.');
        });
    }
}
