<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomExceptions\UserNotFoundException;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class TestController extends Controller
{
    public function index(Request $request)
    {
        try {
            $user = User::find($request->id);
            if ($user == null)
                throw UserNotFoundException::Builder($request->id);
            return response()->json($user, 200);
        } catch (Throwable $th) {
            throw $th;
        }
    }

    public function info(Request $request)
    {
        Log::info("Log some info....", [$request]);
        return response()->json(['Logged some info, you should find it in Kibana discovery page...'], 200);
    }
    public function warning(Request $request)
    {
        Log::warning("Log some warning....", [$request]);
        return response()->json(['Logged some warning, you should find it in Kibana discovery page...'], 200);
    }
    public function error(Request $request)
    {
        Log::error("Log some error....", [$request]);
        return response()->json(['Logged some error, you should find it in Kibana discovery page...'], 200);
    }
    public function alert(Request $request)
    {
        Log::alert("Log some alert....", [$request]);
        return response()->json(['Logged some alert, you should find it in Kibana discovery page...'], 200);
    }
}
