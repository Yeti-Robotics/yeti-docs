<?php

namespace Yeti;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YetiDiscordExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('yeti-discord', YetiDiscordProvider::class);
    }
}
