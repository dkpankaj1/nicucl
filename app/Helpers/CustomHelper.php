<?php
namespace App\Helpers;
use App\Models\Transaction;

class CustomHelper
{
    public static function generateOrderId()
    {
        $nextId = Transaction::max('id') ?? 0;
        do {
            $nextId += 1;
            $orderId = 'ORD' . str_pad($nextId, 6, '0', STR_PAD_LEFT);

        } while (Transaction::where('order_id', $orderId)->exists());

        return $orderId;
    }
}