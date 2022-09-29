<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersUser extends Model
{
    use HasFactory; 

    // protected $table="OrderUser";
    protected $fillable = ['product_id','user_id'];
    protected $primaryKey = ['product_id','user_id'];
}
