<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('telephone', function ($attribute, $value, $parameters, $validator) {
            // Ajoutez ici la logique de validation de numéro de téléphone personnalisée
            // Vous pouvez utiliser des expressions régulières ou d'autres méthodes
            // pour valider le numéro de téléphone selon vos besoins.
            return preg_match('/^(\+\d{1,3})?\s?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/', $value);
        });
    }
}
