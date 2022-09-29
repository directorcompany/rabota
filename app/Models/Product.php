<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['description','price'];

    public function users() {
         return $this->belongsToMany(User::class,'orders_users','user_id','product_id');
    }


}
