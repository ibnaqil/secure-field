<?php

namespace Ibnaqil\SecureField\Components;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Log;

class SecureField extends TextInput
{
    public static function make(string $name): static
    {
        return parent::make($name)
            ->extraAttributes([
                'autocomplete' => 'off',
                'autocorrect' => 'off',
                'autocapitalize' => 'off',
                'spellcheck' => 'false',
                'inputmode' => 'verbatim',
            ])
            ->dehydrated(true)
            ->afterStateHydrated(function ($component, $state) {
                // Dekripsi jika terenkripsi
                if (! is_null($state)) {
                    $component->state(decrypt($state));
                }
            })
            ->dehydrateStateUsing(function ($state) {

                Log::info(encrypt($state));
                return encrypt($state);
            });
    }
}
