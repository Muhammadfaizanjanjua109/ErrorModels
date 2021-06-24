<?php

namespace App\Models;
use App\Models\blogs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    public function blogs()
    {
     return $this->belongsTo(blogs::class);
    }
}
