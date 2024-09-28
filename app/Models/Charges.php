<?php

namespace App\Models;

use App\Enums\ChargesType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    use HasFactory;
    protected $fillable = [
        "type",
        "amount",
    ];
    protected function casts(): array
    {
        return [
            'type' => ChargesType::class
        ];
    }

}
