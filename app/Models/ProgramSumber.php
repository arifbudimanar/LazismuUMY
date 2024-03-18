<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSumber extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function penghimpunans()
    {
        return $this->hasMany(Penghimpunan::class);
    }
}
