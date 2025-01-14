<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasFactory;
    use HasFactory;
    use HasTranslations;

    public $translatable = ['region'];
    protected $fillable =[
      'region',
      'number'
    ];
}
