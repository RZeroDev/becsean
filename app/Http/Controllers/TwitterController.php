<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automating;

class TwitterController extends Controller
{
    public function publishOnTwitter($article, $file) {
        $automating = Automating::firstOrFail();
        $settings['account_id'] = $automating->twitter_account_id;
        $settings['access_token'] = $automating->twitter_access_token;
        $settings['access_token_secret'] = $automating->twitter_access_token_secret;
        $settings['consumer_key'] = $automating->twitter_consumer_key;
        $settings['consumer_secret'] = $automating->twitter_consumer_secret;
        $settings['bearer_token'] = $automating->twitter_bearer_token;

        $client = new \Noweh\TwitterApi\Client($settings);

        $file_data = base64_encode(file_get_contents($file));
        $media_info = $client->uploadMedia()->upload($file_data);
        $return = $client->tweet()->create()
            ->performRequest([
                'text' => $article->title, 
                "media" => [
                    "media_ids" => [
                        (string)$media_info["media_id"]
                    ]
                ]
            ]
        );

        return $return->data->id;
    }

    public function unPublishTwitterPost($post_id) {
        $automating = Automating::firstOrFail();
        $accessToken = $automating->linkedin_access_token;

        $settings['account_id'] = $automating->twitter_account_id;
        $settings['access_token'] = $automating->twitter_access_token;
        $settings['access_token_secret'] = $automating->twitter_access_token_secret;
        $settings['consumer_key'] = $automating->twitter_consumer_key;
        $settings['consumer_secret'] = $automating->twitter_consumer_secret;
        $settings['bearer_token'] = $automating->twitter_bearer_token;

        $client = new \Noweh\TwitterApi\Client($settings);

        $return = $client->tweet()->delete($post_id)
            ->performRequest();

        // if ($return['success']) {
        //     echo 'Le tweet a été supprimé avec succès!';
        // } else {
        //     echo 'Erreur lors de la suppression du tweet : ' . $return['error'];
        // }
    }
}
