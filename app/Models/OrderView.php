<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderView extends Model
{
    use HasFactory;

    protected $table = 'orders_views';
}
