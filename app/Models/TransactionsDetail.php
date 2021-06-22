<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionsDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_transaksi',
        'product_id',
        'jumlah_items'
    ];

    public function transaction() {
        return $this->belongsTo(Transactions::class, 'id_transaksi', 'id');
    }

    public function product() {
        return $this->belongsTo(Products::class,'product_id', 'id');
    }
}

