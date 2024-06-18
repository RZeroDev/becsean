<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutomatingUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\LinkedinController;
use App\Helpers\BackHelper;
use App\Models\Automating;

class AutomatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $linkedinClientId = BackHelper::getAutomating()->linkedin_client_id;
        $linkedinClientSecret = BackHelper::getAutomating()->linkedin_client_secret;
        $linkedinCallback = BackHelper::getAutomating()->linkedin_callback;
        $linkedinAccessToken = BackHelper::getAutomating()->linkedin_access_token;
        $linkedinPageId = BackHelper::getAutomating()->linkedin_page_id;
        $linkedin = new LinkedinController();
        $linkedinUrl = null;
        if($linkedinClientId && $linkedinCallback) 
            $linkedinUrl = $linkedin->authorization_url($linkedinClientId, $linkedinCallback);

        $twitterAccountId = BackHelper::getAutomating()->twitter_account_id;
        $twitterConsumerKey = BackHelper::getAutomating()->twitter_consumer_key;
        $twitterConsumerSecret = BackHelper::getAutomating()->twitter_consumer_secret;
        $twitterBearerToken = BackHelper::getAutomating()->twitter_bearer_token;
        $twitterAccessToken = BackHelper::getAutomating()->twitter_access_token;
        $twitterAccessTokenSecret = BackHelper::getAutomating()->twitter_access_token_secret;

        $instagramPageId = BackHelper::getAutomating()->instagram_page_id;
        $facebookPageId = BackHelper::getAutomating()->facebook_page_id;
        $facebookAccessToken = BackHelper::getAutomating()->facebook_access_token;

        return view('dashboard.pages.automatings.edit', compact(
            'linkedinClientId',
            'linkedinPageId',
            'linkedinUrl',
            'linkedinClientSecret',
            'linkedinCallback',
            'linkedinAccessToken',
            'twitterAccountId',
            'twitterConsumerKey',
            'twitterConsumerSecret',
            'twitterAccessToken',
            'twitterBearerToken',
            'twitterAccessTokenSecret',
            'facebookPageId',
            'instagramPageId',
            'facebookAccessToken'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutomatingUpdateRequest $request)
    {
        $automating = Automating::firstOrFail();
        $automating->update([
            'linkedin_client_id' => $request->linkedin_client_id,
            'linkedin_page_id' => $request->linkedin_page_id,
            'linkedin_client_secret' => $request->linkedin_client_secret,
            'linkedin_callback' => $request->linkedin_callback,
            'linkedin_access_token' => $request->linkedin_access_token,
            'twitter_account_id' => $request->twitter_account_id,
            'twitter_consumer_key' => $request->twitter_consumer_key,
            'twitter_consumer_secret' => $request->twitter_consumer_secret,
            'twitter_bearer_token' => $request->twitter_bearer_token,
            'twitter_access_token' => $request->twitter_access_token,
            'twitter_access_token_secret' => $request->twitter_access_token_secret,
            'instagram_page_id' => $request->instagram_page_id,
            'facebook_page_id' => $request->facebook_page_id,
            'facebook_access_token' => $request->facebook_access_token,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutomatingUpdateRequest $request)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
