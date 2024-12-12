<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "suppliers";
    protected $fillable = [        
        'company_name',
        'address',
        'phone',
        'email'
    ];
    

    public function sparepart()
    {
        return $this->hasOne(Sparepart::class,'supplier_id','id');
    }

}
