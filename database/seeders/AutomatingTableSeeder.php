<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutomatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('automatings')->insert([
            [
                'instagram_page_id' => '',
                'facebook_page_id' => '103827735362770',
                'facebook_access_token' => 'EAA0UJP3tmzIBOzUEDodmgsHLkE11eunswe8bJj75P3c3D7aGZAg0ONgiAUJMLdNWkueDPAne0v23ZAYN0mLDyBqzfT6B8Df4N17ZAPSL2WjneEGcqOpz3roaeeZCMLSOg6H0xZCTZCdiZBGWhb4HmZCcC5gH4Eq9JUP9r71ayWYv7FnMViaBeuyKL8sX2RgYepQZD',
                'linkedin_page_id' => '101097497',
                'linkedin_client_id' => '78pp8h0o5w0sfh',
                'linkedin_client_secret' => 'c9Sa7UcT3xxdYEhd',
                'linkedin_access_token' => 'AQWfiSvFITxXocZhBlbfjlT7c1QeNcMhzxiLpV0IEvMwUCvJZJ1MVYblyrFTPanlpHUbLwLv2HyoG7dbqt54_ZqDrT7fQ-CA2Ze4DoXxUQU-Oy0sfoiJV1u5blLqfW8YJ85vR-CdI8eTHZbj1BJT6coLgUkMZu8wb8UueLmEauPA-R1QhNa38fcqwjRN1I2HtHyoiSPT0KuYuH2GDimNc2BpuhiPqi5HP1pDImyAOgTLkPZbL5UZUEedYQR9cq8uQn0hYgEumdHyJ02wlQUGHyHGJOgDGEJnx24d26Z__TgHSCkIW2TM39B72iGIWDeR9hfRLZinMpuWsYeQFonqb2djd3xN8g',
                'linkedin_callback' => 'http://localhost:8000/linkedin/callback',
                'twitter_account_id' => '28442845',
                'twitter_consumer_key' => 'S9LAXP7lenNZ09kFuVAENMrRj',
                'twitter_consumer_secret' => '14NqZeuCG2fYpf9xiSaBY6KfMScEL8fe1CHw8jzGlJWnaqnsmy',
                'twitter_bearer_token' => 'AAAAAAAAAAAAAAAAAAAAAN0AsgEAAAAAkT2Gh%2Bcce6uMJ9tWhaxBaqLm45Q%3D7hGfRjiB0VyQKL7AKzxd8gzSgWsdL7yrWztAe5MfqFILt44g6I',
                'twitter_access_token' => '764827982686978049-IzEde7rAZLdyAerqdReJYQICvebzoSi',
                'twitter_access_token_secret' => 'OO45iX5J39fl2siWNld7Un7zsrOEjc5Thbbh8eYsQ2HW8',
            ]
        ]);
    }
}
