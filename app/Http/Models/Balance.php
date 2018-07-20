<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    // private $table = 'balance';
    public $timestamps = false;

    public function deposit(float $value) : array
    {
        DB::beginTransaction();

        $totalBefore = $this->amount ?? 0;
        $this->amount += $value;
        $deposit = $this->save();

        $historic = auth()->user()->historics()->create([
            'type' => 'I',
            'amount' => $value,
            'total_before' => $totalBefore,
            'total_after' => $this->amount,
            'date' => date('Ymd')
        ]);

        if ($deposit && $historic)
            DB::commit();

            return [
                'success' => true,
                'message' => "Sucesso ao recarregar"
            ];

        DB::rollBack();
        
        return [
            'success' => false,
            'message' => "Falha ao recarregar"
        ];
    }
}
