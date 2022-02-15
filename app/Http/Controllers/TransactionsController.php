<?php

namespace App\Http\Controllers;

use App\Services\TransactionsReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TransactionsController extends Controller
{
    public function getTransactions(TransactionsReader $reader){

    }
}
