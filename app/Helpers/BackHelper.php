<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App;
use App\Models\Automating;
use App\Models\Message;
use App\Models\User;

class BackHelper
{
    public static function getFormattedPrice($price)
    {
        $price = floatval($price);
        return number_format($price, 0, '.', ' ');
    }

    public static function getAdminEmails()
    {
        $users = User::role('admin')->get();
        $emails = '';
        foreach ($users as $index => $user) {
            $emails .= $user->email;
            if (++$index < count($users)) {
                $emails .= ',';
            }
        }
        return $emails;
    }

    public static function getAdminUsers()
    {
        $users = User::role('admin')->get();
        return $users;
    }
    public static function getAutomating()
    {
        $automating = Automating::firstOrFail();
        return $automating;
    }



    
}
