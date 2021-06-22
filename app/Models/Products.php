<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Products extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable =[
        'product_name',
        'slug',
        'file_path',
        'price',
        'quantity'
    ];

    protected $keyType = 'string';

    protected $primaryKey = 'id';


}
