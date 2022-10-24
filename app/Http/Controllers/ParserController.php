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
use \AmoCRM\OAuth\AccessTokenInterface;
use \AmoCRM\OAuth\leads;


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
// getAccessTokenByCode(string $code);

// $leadsService = $apiClient->leads();

$code='def50200e91549f6ba3b77ce00a39abcf6ef19db4473ec5bcf4b165a3a10b3bb52e2bd4f463d63304a87c8e04511fc44d73a4f252b89ab0b42d0493250c3fb4f560b841664c7ac03e4c846c7efb33946e22df8538bb6b445b1a3c037dbaeae33082241ace9a8a5b83c306e05bc7b1e7387748a5c4c374029ca4e3a312cd582469250bda163f8f022156503a9fc075248ae37c7409dabdf8f6ab90e57b1516bef6a63ff55a650782173ebf44f806279aca272bc6b9983cbe320307ebc1322708e0711a817c4e095d8d1c78dcd2d65e844a59bdfe22ebcaf752e233fa6115c2ee45598c77e869ac5f860babe5efcbc31a1e743bf05e5729cd42dcd76848f2310f93f10eb20f22a9da211bb099942c3e770c652d4c6cc4df8aa2cb1ba0bfaa3b6698d87b7bfca9aae2f0fc6eb372858c2bd301dc07cac2a47f8d8ba28e4300518fcecba5ed551d94ce700c02a6a20b7e35da6f179f31120977e1eda3adec32ed75e98c58a9050e9307f2af58ce28b19618537d2a4f4928e7b65459e6a4bd6ba8c672606d6a88eee0c9403c00470663cb2310d6613424dab1a8dca8892d6e9aa5ab474ef715e7663f4b90b31809405f49306ee47f34d213ba3faec0676ee7273e6e554e3eb0cfea88bbd4f8556d1e23b9835a99914dee7ba3bdaaeb1600c33645610c2a2cbbfe00b4aa5eaf7';

// getAccessTokenByCode($code);
// $accessToken = $apiClient->getOAuthClient()->getAccessTokenByCode($_GET['code']);

dd($apiClient );
}
}
