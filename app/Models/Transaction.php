<?php

namespace App\Models;

use App\Enums\TxnStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "order_id",
        "user_id",
        "amount",
        "date",
        "notes",
        "status",
    ];

    protected function casts(): array
    {
        return [
            'status' => TxnStatus::class
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
