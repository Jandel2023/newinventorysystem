<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['supplier','phone','email','address'];

    protected $count = 'suppliers';

    public function product(){
        return $this->hasMany(Product::class);
    }
}
