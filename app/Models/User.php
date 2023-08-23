<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    use SoftDeletes;
    protected $table = 'users';
    protected $guarded = false;


    public function orders(){
        return $this->belongsToMany(Product::class,'orders','user_id', 'product_id');
    }

}
