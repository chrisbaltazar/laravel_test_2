<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionsImport implements ToArray, WithHeadingRow
{

    public function array(array $array)
    {
        return [
            'id'         => $array[0],
            'code'       => $array[1],
            'amount'     => $array[2],
            'user_id'    => $array[3],
            'created_at' => $array[4],
            'updated_at' => $array[5],
        ];
    }

}
