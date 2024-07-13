<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';     //*** Specify the custom table name

    protected $fillable = [		//*** add the list according "migration_file"
        'name',
        'qty',
        'price',
        'discription'
    ];

}
