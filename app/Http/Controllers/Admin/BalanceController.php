<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index()
    {
        $balance = auth()->user()->balance;
        $amount = $balance->amount ?? 0;
        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function depositStore(Request $r)
    {
        $value = preg_replace(['/\./','/,/'], ['','.'], $r->value);
        $b = auth()->user()->balance()->firstOrCreate([]);
        return $b->deposit($value);

        //aula 23
    }
}
