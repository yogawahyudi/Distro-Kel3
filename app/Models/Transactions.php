<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;
    use Uuids;

    protected $fillable =[
        'name_cust',
        'alamat',
        'No_hp',
        'jumlah_product',
        'total_harga'
    ];

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'id');
    }
    protected $keyType = 'string';

    protected $primaryKey = 'id';
}
