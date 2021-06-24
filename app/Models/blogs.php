<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\review;


class blogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps=false;


    protected $fillable = [
        'tittle',
        'body',
    ];

    public function review()
    {
      return  $this->hasMany(review::class);
    }

}
