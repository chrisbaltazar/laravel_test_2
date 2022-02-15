<?php

namespace App\Services;

use App\Imports\TransactionsImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class CSVTransactionsReader implements TransactionsReader
{

    public function retrieveTransactions(): array
    {
        return [
            'source' => self::getType(),
            'data'   => $this->parseData(),
        ];
    }

    public static function getType(): string
    {
        return 'CSV';
    }

    protected function parseData(): array
    {
        return Excel::toArray(new TransactionsImport, $this->getFilePath())[0];
    }

    protected function getFilePath()
    {
        return Storage::path('transactions.csv');
    }

}
