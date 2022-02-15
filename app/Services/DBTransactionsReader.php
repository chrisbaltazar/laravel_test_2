<?php

namespace App\Services;

class DBTransactionsReader implements TransactionsReader
{

    public function retrieveTransactions(): array
    {
        return [];
    }

    public static function getType(): string
    {
        return 'DB';
    }

}
