<?php

use App\User;

if (!function_exists('set_active')) {
    function set_active($uri, $output = 'active')
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}

if (! function_exists('modul_asset')) {
    function modul_asset($modul_name, $path)
    {
        return url('/Modules') . "/" . $modul_name . "/public/" . $path;
    }
}

if (! function_exists('modul')) {
    function modul()
    {
        $modul = ['dashboard'];
        return $modul;
    }
}

if (! function_exists('user_online')) {
    function user_online()
    {
        $user        = new User();
        $user_online = $user->mostRecentOnline()->toArray();
        $user_size   = array_keys($user_online);

        $data=[];

        for ($i=0; $i < sizeof($user_size) ; $i++) {
            // $data['id'][]  = $user_online[$user_size[$i]]['id'];
            $data['all'][] = array (
                'name'     => $user_online[$user_size[$i]]['name'],
                'username' => $user_online[$user_size[$i]]['username'],
                'email'    => $user_online[$user_size[$i]]['email'],
                'role'     => User::find($user_online[$user_size[$i]]['id'])->getRoleNames()[0],
            );
        }
        return $data;
    }
}

