<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    protected $table="contacts";
    protected $primarykey="id";
    protected $fillable=[
        'namec',
        'emailc',
        'message'
    ];
}
