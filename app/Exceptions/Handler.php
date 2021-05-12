<?php

namespace App\Exceptions;

use App\Http\Controllers\LoggingParser\LoggerBuilder;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\DB;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // Add in boot function
    }

    public function report(Throwable $e)
    {
        LoggerBuilder::error('exception', ['message' => $e->getMessage(), "Trace" => $e->getTraceAsString()], "SYSTEM-THROW-ERROR");
        parent::report($e);
    }
}
