<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Variant extends Model
{
    use HasFactory;

    //fungsinya untuk mencari si product nya
    public function product() {
        return $this->belongsTo(Product::class);   //belongsTo artinya 1 product bisa punya banyak variant (connectnya varian itu kemana? yaitu ke product)
    }
}
