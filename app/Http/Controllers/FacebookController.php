<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automating;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FacebookController extends Controller
{
    public function publishOnFacebook($article, $link) {
        $automating = Automating::firstOrFail();
        // Les paramètres de la requête
        $pageId = $automating->facebook_page_id;  // L'ID de votre page Facebook
        $accessToken = $automating->facebook_access_token;  // Jeton d'accès Facebook

        // URL de l'API Graph de Facebook
        $url = "https://graph.facebook.com/{$pageId}/feed";

        // Paramètres de la requête POST
        $params = [
            'message' => $article->title,
            'access_token' => $accessToken,
            'link' => $link,
            // 'url' => $resizedImagePath
        ];

        try {
            // Exécute la requête POST avec Laravel HTTP client
            $response = Http::post($url, $params);
        } catch(FacebookExceptionsFacebookResponseException $e) {
            echo 'L\'API Graph a renvoyé une erreur: ' . $e->getMessage();
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            echo 'Le SDK Facebook a renvoyé une erreur: ' . $e->getMessage();
            exit;
        }

        $dataArray = json_decode($response->body(), true);
        if ($dataArray === null && json_last_error() !== JSON_ERROR_NONE) {
            echo 'Erreur lors du décodage JSON : ' . json_last_error_msg();
        } else {
            $idValue = $dataArray['id'];
            return $idValue;
        }
    }

    public function unPublishFacebookPost($post_id) {
        $automating = Automating::firstOrFail();
        // Les paramètres de la requête
        $pageId = $automating->facebook_page_id;  // L'ID de votre page Facebook
        $accessToken = $automating->facebook_access_token;  // Jeton d'accès Facebook

        $url = "https://graph.facebook.com/{$post_id}";

        $params = [
            'access_token' => $accessToken,
        ];

        try {
            $response = Http::delete($url, $params);
        } catch(FacebookExceptionsFacebookResponseException $e) {
            echo 'L\'API Graph a renvoyé une erreur: ' . $e->getMessage();
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            echo 'Le SDK Facebook a renvoyé une erreur: ' . $e->getMessage();
            exit;
        }

        if ($response->successful()) {
            // echo 'La publication a été supprimée avec succès!';
        } else {
            echo 'Erreur lors de la suppression de la publication: ' . $response->body();
        }
    }

    public function unPublishInstagramPost($post_id) {
        $automating = Automating::firstOrFail();
        $accessToken = $automating->linkedin_access_token;

        try {
            $client = new Client(['base_uri' => 'https://api.linkedin.com']);
            $response = $client->request('DELETE', "/v2/shares/{$post_id}", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Content-Type' => 'application/json',
                    'x-li-format' => 'json',
                ],
            ]);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = json_decode($e->getResponse()->getBody()->getContents(), true);
                echo 'Erreur LinkedIn : ' . $response['message'];
            } else {
                echo 'Erreur LinkedIn inconnue.';
            }
        }
    }

    public function getInstagramPageId() {
        $automating = Automating::firstOrFail();
        // Les paramètres de la requête
        $facebook_page_id = $automating->facebook_page_id;  // L'ID de votre page Facebook
        $accessToken = $automating->facebook_access_token;  // Jeton d'accès Facebook

        $url = "https://graph.facebook.com/v19.0/$facebook_page_id?fields=instagram_business_account";

        $params = [
            'access_token' => $accessToken,
        ];

        try {
            $response = Http::get($url, $params);
        } catch(FacebookExceptionsFacebookResponseException $e) {
            echo 'L\'API Graph a renvoyé une erreur: ' . $e->getMessage();
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            echo 'Le SDK Facebook a renvoyé une erreur: ' . $e->getMessage();
            exit;
        }

        dd($response->json());

        // $dataArray = json_decode($response->body(), true);
        // if ($dataArray === null && json_last_error() !== JSON_ERROR_NONE) {
        //     echo 'Erreur lors du décodage JSON : ' . json_last_error_msg();
        // } else {
        //     $idValue = $dataArray['id'];
        //     return $idValue;
        // }
    }
}
