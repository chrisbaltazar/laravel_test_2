<?php

namespace App\Providers;

use App\Services\CSVTransactionsReader;
use App\Services\DBTransactionsReader;
use App\Services\TransactionsReader;
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
        $source = Request::query('source');
        if (isset($source)) {
            $this->app->bind(TransactionsReader::class,
                function () use ($source) {
                    switch (strtoupper($source)) {
                        case CSVTransactionsReader::getType():
                            return new CSVTransactionsReader();
                        case DBTransactionsReader::getType():
                            return new DBTransactionsReader();
                    }
                    abort(403, 'Data source not recognised');
                });
        }
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
