<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automating;
use GuzzleHttp\Client;

class LinkedinController extends Controller
{
    public function authorization_url() {
        $url = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=78pp8h0o5w0sfh&redirect_uri=http://localhost:8000/linkedin/callback&scope=email,profile,w_member_social,r_organization_social,rw_organization_admin,w_organization_social,r_basicprofile,r_organization_admin";

        return $url;
    }

    public function linkedinCallback(Request $request) {
        try {
            $client = new Client(['base_uri' => 'https://www.linkedin.com']);
            $response = $client->request('POST', '/oauth/v2/accessToken', [
                'form_params' => [
                        "grant_type" => "authorization_code",
                        "code" => $request['code'],
                        "redirect_uri" => "http://localhost:8000/linkedin/callback",
                        "client_id" => "78pp8h0o5w0sfh",
                        "client_secret" => "c9Sa7UcT3xxdYEhd",
                ],
            ]);
            $data = json_decode($response->getBody()->getContents(), true);
            $access_token = $data['access_token']; // store this token somewhere
            return $access_token;
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getLinkedinId() {
        $automating = Automating::firstOrFail();
        $accessToken = $automating->linkedin_access_token;
        
        try {
            $client = new Client(['base_uri' => 'https://api.linkedin.com']);
            $response = $client->request('GET', '/v2/organizationalEntityAcls?q=roleAssignee&role=ADMINISTRATOR&state=APPROVED', [
                'headers' => [
                    "Authorization" => "Bearer " . $accessToken,
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            // Supposons que la première entité organisationnelle est la page LinkedIn
            // $linkedin_page_id = $data['elements'][0]['organization'];
            return $data;
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function publishOnLinkedin($article, $url, $file) {
        $automating = Automating::firstOrFail();
        $accessToken = $automating->linkedin_access_token;
        $linkedinId = $automating->linkedin_page_id;

        $publication_content = [
            'owner' => 'urn:li:organization:' . $linkedinId,
            'content' => [
                'contentEntities' => [
                    [
                        'entityLocation' => $url,
                        'thumbnails' => [
                            ['resolvedUrl' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/09/c3/33/97.jpg'],
                        ],
                    ],
                ],
                'title' => $article->title,
            ],
            'distribution' => [
                'linkedInDistributionTarget' => [
                    'visibleToGuest' => true,
                ],
            ],
        ];

        try {
            $client = new Client(['base_uri' => 'https://api.linkedin.com']);
            $response = $client->request('POST', "/v2/shares", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Content-Type' => 'application/json',
                    'x-li-format' => 'json',
                ],
                'json' => $publication_content,
            ]);

            if ($response->getStatusCode() == 201) {
                // Traiter la réponse pour obtenir l'ID de la nouvelle publication
                $data = json_decode($response->getBody()->getContents(), true);
                $publication_id = $data['id'];
                return $publication_id;
            } else {
                return 'Erreur lors de la publication sur la page LinkedIn.';
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = json_decode($e->getResponse()->getBody()->getContents(), true);
                echo 'Erreur LinkedIn : ' . $response['message'];
            } else {
                echo 'Erreur LinkedIn inconnue.';
            }
        }
    }

    public function unPublishLinkedinPost($post_id) {
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
}