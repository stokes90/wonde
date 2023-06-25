<?php
namespace App\Http\Traits;

use App\Models\ApiSetting;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

trait ApiCall {
    private $classEndpoint = 'classes';
    private $employeesEndpoint = 'employees';
    
    public function callEndpoint($endPoint) {
        $client = $this->getClient();
        $response = $client->get($endPoint, [
            'headers' => $this->getHeaders()
        ]);
        
        if($response->getStatusCode() != '200'){
            dd("Something went wrong with the API call. TODO handle this better");
        }

        $data = json_decode($response->getBody()->getContents())->data;
        return $data;
    }
    
    public function getClient(){
        $client = new Client([
            'base_uri' => $this->getBaseUri(),
            'http_errors' => false
        ]);
        return $client;
    }
    
    public function getHeaders(){
        return [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->getBearerToken(),
        ];
    }
    
    
    public function getBaseUri(){
        $setting = ApiSetting::where('name', 'base_uri')->first();
        $baseUri = $setting->value . '/' .  $this->getSchoolId() .'/';
        
        return $baseUri;
    }
    
    public function getBearerToken(){
        $setting = ApiSetting::where('name', 'bearer_token')->first();
        return $setting->value;
    }
    
    public function getSchoolId(){
        $setting = ApiSetting::where('name', 'school_id')->first();
        return $setting->value;
    }
    
    
}