<?php
namespace Africoders\SSO\Listener;

use Flarum\Settings\SettingsRepositoryInterface;
use Africoders\SSO\Services\ConfigService;

class AddLogoutRedirect
{
    private $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    final public function addLogoutRedirect(): void
    {
        $logoutUrl = ConfigService::getLogoutUrl();
        header("Location: $logoutUrl");
        return;
    }
}
