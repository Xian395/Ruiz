<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'area',
        'desc',
        'price',
        'status',
        'type',
        'image'     
    ];

    protected $table = 'property';

    protected $primarykey = 'id';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
