<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class product extends Model   //fungsinya product id 2, yg punya banyak variant dan untuk mencari si variant nya
{
    use HasFactory;

    public function variants() {
        return $this->hasMany(Variant::class);
    }
}
