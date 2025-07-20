<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AddonsService
{
    private $productKey = '31264738';
    private $apiUrl = 'https://store.bdtask.com/api/products';
    private $accessKey = '3b32166232ca4e50bcde73a98ec6a96c25d59567';
    private $appUrl = 'https://store.bdtask.com';
    private $headers;

    public function __construct()
    {
        $this->headers = [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $this->accessKey,
        ];
    }

    // Get all modules
    public function getModules()
    {
        return DB::table('module')->orderBy('display_name', 'asc')->get();
    }

    // Get module info by ID
    public function getModuleById($moduleId)
    {
        return DB::table('module')->where('id', $moduleId)->first();
    }

    // Get all active module names
    public function getActiveModuleNames()
    {
        return DB::table('module')->where('status', 1)->pluck('module_name')->toArray();
    }

    // Update module status
    public function updateModuleStatus($moduleId, $status = 0)
    {
        return DB::table('module')->where('id', $moduleId)->update(['status' => $status]);
    }

    // Send GET request
    public function sendCurlRequest($url)
    {
        $response = Http::withoutVerifying()->get($url);
        return $response->body();
    }

    // Send POST request
    public function curlPostRequest($url, $postData)
    {
        $response = Http::withHeaders($this->headers)
                        ->withoutVerifying()
                        ->withUserAgent('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)')
                        ->post($url, $postData);

        if ($response->successful()) {
            return $response->body();
        } else {
            return json_encode(['error' => 'An error has occurred: ' . $response->body()]);
        }
    }

    // Get available modules
    public function searchAvailableModules()
    {
        if (Session::has('add_new_module')) {
            return Session::get('add_new_module');
        }

        $url = $this->apiUrl . '/modules/' . $this->productKey;
        $result = $this->sendCurlRequest($url);
        Session::put('add_new_module', $result);

        return $result;
    }

    // Get available themes
    public function searchAvailableThemes()
    {
        if (Session::has('add_new_theme')) {
            return Session::get('add_new_theme');
        }

        $url = $this->apiUrl . '/themes?product_key=' . $this->productKey . '&access_key=' . $this->accessKey;
        $result = $this->sendCurlRequest($url);
        Session::put('add_new_theme', $result);

        return $result;
    }

    // Send new module download request
    public function sendDownloadRequest($getdata)
    {
        $url = $this->apiUrl . '/download_module?' . $getdata . '&access_key=' . $this->accessKey;
        return json_decode($this->sendCurlRequest($url));
    }

    // Purchase new theme
    public function purchaseNewTheme($getdata)
    {
        $url = $this->apiUrl . '/download_theme?' . $getdata . '&access_key=' . $this->accessKey;
        return json_decode($this->sendCurlRequest($url));
    }

    // Get downloaded module names
    public function getDownloadedModules()
    {
        $path = base_path('modules');
        $directories = File::directories($path);

        return array_map(function ($dir) {
            return preg_replace('/\W/', '', basename($dir));
        }, $directories);
    }

    // Get installed module names from DB
    public function getInstalledModuleNames()
    {
        return DB::table('module')->pluck('name')->toArray();
    }

    // Verify theme zip upload
    public function verifyZipUpload($getdata)
    {
        $url = $this->apiUrl . '/verify_zip_upload?' . $getdata . '&access_key=' . $this->accessKey;
        return json_decode($this->sendCurlRequest($url));
    }

    // Send app download request
    public function sendAppDownloadRequest($domain, $purchaseKey)
    {
        $url = $this->appUrl . '/class.addon.php?domain=' . $domain . '&product_key=' . $this->productKey . '&purchase_key=' . $purchaseKey;
        return json_decode($this->sendCurlRequest($url));
    }
}
