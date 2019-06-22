<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('components.navegar', 'navegar');
        Blade::component('components.rodape', 'rodape');
        Blade::component('components.servicos', 'servicos');
        Blade::component('components.masterHead', 'masterHead');
        Blade::component('components.pacoteDetalhado', 'pacote');
        Blade::component('components.orcamentos', 'orcamentos');
        Blade::component('components.navegarF', 'navegarF');
        Blade::component('components.visuFor', 'visuFornecedor');
        Blade::component('components.rankFor', 'rankFornecedor');
        Blade::component('components.pagFor', 'infoFornecedor');
        Blade::component('components.userPagFor', 'userInfoFornecedor');
        Blade::component('components.pacotes', 'pacotes');
        Blade::component('components.fornecedores', 'fornecedores');
        Blade::component('components.hisfor', 'hisFor');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
