<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = "spareparts";

    protected $fillable = [
        'name',
        'code',
        'price',
        'quantity',
        'description',
        'supplier_id',
        'category_id'
    ];
    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


}
