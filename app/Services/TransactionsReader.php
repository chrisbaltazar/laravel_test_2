<?php

namespace App\Services;

interface TransactionsReader
{

    /**
     * Returns the specific type/source for each reader.
     *
     * @return string
     */
    public static function getType(): string;

    /**
     * Gathers and returns the array of transactions from the specific source.
     *
     * @return array
     */
    public function retrieveTransactions(): array;

}
