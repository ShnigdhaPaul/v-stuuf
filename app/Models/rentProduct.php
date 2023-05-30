<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentProduct extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','availibility', 'price', 'image', 'quantity', 'user_id'];

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}