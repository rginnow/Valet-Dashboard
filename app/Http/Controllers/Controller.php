<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Send a successful response
     *
     * @param Request     $request
     * @param mixed       $result
     * @param string|null $message
     *
     * @return JsonResponse|view
     */
    public function sendSuccess(Request $request, $result, $view, ?string $message = null)
    {
        if ($request->expectsJson()) {
            $response = [
                'success' => true,
                'data' => $result,
                'message' => $message,
            ];

            return response()->json($response, 200);
        }

        return view($view, $result);
    }

    /**
     * Send a failed response
     *
     * @param Request         $request
     * @param string          $error
     * @param \Exception|null $e
     * @param integer         $code
     *
     * @return JsonResponse|view
     */
    public function sendError(Request $request, string $error, ?\Exception $e, int $code = 200)
    {
        if ($request->expectsJson()) {
            $response = [
                'success' => false,
                'message' => $error,
            ];

            if (!empty($e)) {
                $response['exception'] = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTrace(),
                ];
            }

            return response()->json($response, $code);
        }

        return view('errors.500', $error);
    }
}
