<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = ["product_id", "order_date", "quantity"];


    public function product(){

        return $this->belongsTo(Product::class);

        }
    }
