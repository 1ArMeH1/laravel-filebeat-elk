<?php

namespace App\Exceptions;

use App\Exceptions\CustomExceptions\CodedException;
use App\Trait\WithHandyTools;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    use WithHandyTools;
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $ex) {
            Log::error("[" . $ex->getCode() . "]", ["message" => $ex->getMessage(), 'file' => $ex->getFile(), "line" => $ex->getLine()]);
        })->stop();

        $this->renderable(function (Throwable $e) {
            if ($e instanceof CodedException) {
                $responseCode =   400;
                $code = $e->getCode();
                $payload = $this->Response($e, $code);
            } else {
                $responseCode =   500;
                $code = $e->getCode();
                $payload = $this->Response($e, $code);
            }

            return response()->json($payload, $responseCode);
        });
    }

    private function Response($ex, $code)
    {
        Log::error(["exception" => ["message" => $ex->getMessage(), 'file' => $ex->getFile(), "line" => $ex->getLine()], "code" => $code]);
        return ["exception" => $ex->getMessage(), 'file' => $ex->getFile(), "line" => $ex->getLine(), "code" => $code];
    }
}
