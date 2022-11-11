<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedRab extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function rabs()
    {
        return $this->belongsTo(Rab::class);
    }
}
