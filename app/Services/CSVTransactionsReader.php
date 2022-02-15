<?php

namespace App\Services;

class CSVTransactionsReader implements TransactionsReader
{

    public function retrieveTransactions(): array
    {
        return [];
    }

    public static function getType(): string
    {
        return 'CSV';
    }

}
