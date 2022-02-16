<?php

namespace App\Providers;

use App\Services\CSVTransactionsReader;
use App\Services\DBTransactionsReader;
use App\Services\TransactionsReader;
use App\Services\UnknownTrasactionsReader;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TransactionsReader::class, function () {
            switch (strtoupper(Request::query('source'))) {
                case CSVTransactionsReader::getType():
                    return new CSVTransactionsReader();
                case DBTransactionsReader::getType():
                    return new DBTransactionsReader();
                default:
                    return new UnknownTrasactionsReader();
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
