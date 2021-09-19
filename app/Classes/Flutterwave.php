<?php
namespace App\Classes;



use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class Flutterwave
{

    /**
     * Get api endpoint
     *
     * @return mixed
     */
    private static function url()
    {
        return env('RAVE_BASE_URL');
    }

    /**
     * Get headers
     *
     * @return array
     */
    public static function getHeaders(): array
    {
        $headers = [
            "Accept: application/json",
            "Content-Type: application/json"
        ];
        $headers[] = "Authorization: Bearer " . env('RAVE_SECRET_KEY');
        return $headers;
    }


    /**
     * VERIFY BVN
     *
     * @param $payload
     * @return array
     */
    public static function initiatePayment ($payload): array
    {
        try {
            $method = 'POST';
            $url = self::url();
            $headers = self::getHeaders();
            $res = HttpClient::send($headers, $method, $url, json_encode($payload));

            Log::info('========== rave response ==============');
            Log::info(json_encode($res));

            $data = json_decode($res['RESPONSE_BODY']);

            if ($res['HTTP_CODE'] == 200 && $data->status == 'success') {
                return [
                    'success' => true,
                    'message' => $data->message,
                    'data' => $data->data
                ];
            }
            return [
                'success' => false,
                'message' => $data->message
            ];
        } catch (\Exception $exception) {
            return [
                'success' => false,
                'message' => 'Error initiating payments',
                'error' => $exception->getMessage()
            ];
        }
    }
}
