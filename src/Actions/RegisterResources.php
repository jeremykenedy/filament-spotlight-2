<?php

namespace jeremykenedy\FilamentSpotlight\Actions;

use Filament\Facades\Filament;
use jeremykenedy\FilamentSpotlight\Commands\ResourceCommand;
use LivewireUI\Spotlight\Spotlight;

class RegisterResources
{
    public function __invoke()
    {
        $resources = Filament::getResources();

        foreach ($resources as $resource) {
            $pages = $resource::getPages();

            foreach ($pages as $key => $page) {
                if (blank($key) || blank($page['class'])) {
                    continue;
                }

                $command = new ResourceCommand(
                    resource: $resource,
                    page: $page['class'],
                    key: $key,
                );

                Spotlight::$commands[$command->getId()] = $command;
            }
        }
    }
}
