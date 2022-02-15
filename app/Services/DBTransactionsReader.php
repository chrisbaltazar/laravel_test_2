<?php

namespace App\Services;

use App\Models\Transaction;

class DBTransactionsReader implements TransactionsReader
{

    public function retrieveTransactions(): array
    {
        return [
            'source' => self::getType(),
            'data'   => Transaction::all(),
        ];
    }

    public static function getType(): string
    {
        return 'DB';
    }

}
