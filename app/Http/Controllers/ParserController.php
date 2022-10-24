<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Parser;
use App\Jobs\NewsParser;
use App\Http\Controllers\Controller;
use \AmoCRM\Client\AmoCRMApiClientFactory;
use \AmoCRM\OAuth\OAuthConfigInterface;
use \AmoCRM\OAuth\OAuthServiceInterface;
use \AmoCRM\OAuth\getOAuthClient;

class ParserController extends Controller
{
public function api(){
    $clientId='85704d8f-3948-4503-806a-121cfe857af6';
    $clientSecret='1s6gU2DsLZy5QipwOXyzCGtMI6ZiYzlXjnuMcE6FmPhE3ZXym4TjND5DCkAqTWrB';
    $redirectUri='https://vasya1994.amocrm.ru';

    $apiClient = new \AmoCRM\Client\AmoCRMApiClient($clientId, $clientSecret, $redirectUri);
//     $apiClientFactory = new \AmoCRM\Client\AmoCRMApiClientFactory($oAuthConfig, $oAuthService);
// $apiClient = $apiClientFactory->make();

// getAccessTokenByCode(string $code);
$leadsService = $apiClient->leads();
$accessToken = $apiClient->getOAuthClient()->getAccessTokenByCode($_GET['code']);

dd($apiClient );
}
}
