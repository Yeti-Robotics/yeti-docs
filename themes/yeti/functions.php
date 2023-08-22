<?php

namespace Yeti;

use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;

require "YetiDiscordProvider.php";
require "YetiDiscordExtendSocialite.php";

Theme::listen(ThemeEvents::APP_BOOT, function($app) {
    Theme::addSocialDriver('yeti-discord', [
        'client_id'     => env('YETI_DISCORD_APP_ID'),
        'client_secret' => env('YETI_DISCORD_APP_SECRET'),
        'redirect'      => env('APP_URL') . '/login/service/yeti-discord/callback',
        'name'          => 'Yeti Discord',
        'auto_register' => env('YETI_DISCORD_AUTO_REGISTER', false),
        'auto_confirm'  => env('YETI_DISCORD_AUTO_CONFIRM_EMAIL', false),
    ], '\Yeti\YetiDiscordExtendSocialite@handle');
});
