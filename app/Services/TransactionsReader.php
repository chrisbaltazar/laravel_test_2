<?php

namespace App\Services;

interface TransactionsReader
{

    public static function getType(): string;

    public function retrieveTransactions(): array;

}
