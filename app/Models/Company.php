<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'mode',
        'description',
    ];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
