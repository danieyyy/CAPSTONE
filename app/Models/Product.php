<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',                  
        'category',                      
        'size',                           
        'color',                            
        'warehouse_id',                    
        'created_at',                    
        'updated_at', 
        'created_by',                    
        'updated_by', 
    ];

    
}
