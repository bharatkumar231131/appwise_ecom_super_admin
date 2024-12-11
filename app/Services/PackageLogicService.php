<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class PackageLogicService
{
    protected $client;
    protected $apiUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = 'http://localhost/appwise/api';
    }

    public function sendPackageUpgradeData($queryParams)
    {
        // $url = "http://localhost/appwise/api/shop-owner/update-package";
        $endpoint = "shop-owner/update-package";
        try {
            // API ko POST request bhejna with queryParams
            $response = Http::post($this->apiUrl . $endpoint, $queryParams);

            // Agar response successful hai, to JSON return karein
            if ($response->successful()) {
                return $response->json();
            }

            // Agar API fail hoti hai, error return karein
            return [
                'error' => true,
                'message' => 'Failed to call the API',
            ];
        } catch (\Exception $e) {
            // Agar koi exception aaye to handle karein
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }
}
