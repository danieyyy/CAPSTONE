<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerStore extends Model
{
    use HasFactory;


    protected $table = 'seller_store';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'fk_seller_id', 
        'product_image',                                            
        'product_name',                                               
        'color',                                                   
        'price',                                                      
        'created_at'                                               
        
    ];

    public $timestamps = true;
    
}
