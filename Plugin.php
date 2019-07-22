<?php namespace Dizoo\Partners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Dizoo\Partners\Components\Partner::class       => 'partner'
        ];
    }

    public function registerSettings()
    {
    }
}
