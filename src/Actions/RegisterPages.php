<?php

namespace jeremykenedy\FilamentSpotlight\Actions;

use Filament\Facades\Filament;
use jeremykenedy\FilamentSpotlight\Commands\PageCommand;
use LivewireUI\Spotlight\Spotlight;

class RegisterPages
{
    public function __invoke()
    {
        $pages = Filament::getPages();

        foreach ($pages as $page) {
            $name = \Livewire\invade(new $page())->getTitle();
            $url = $page::getUrl();

            if (blank($name) || blank($url)) {
                continue;
            }

            $command = new PageCommand(
                name: $name,
                url: $url
            );

            Spotlight::$commands[$command->getId()] = $command;
        }
    }
}
