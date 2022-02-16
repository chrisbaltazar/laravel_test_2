<?php

namespace App\Services;

class UnknownTrasactionsReader implements TransactionsReader
{

    public static function getType(): string
    {
        return '';
    }

    public function retrieveTransactions(): array
    {
        throw new \Exception('Invalid transactions source');
    }

}
