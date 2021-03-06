<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// 1. To specify package’s class you are using
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Article extends Model implements TranslatableContract
{
    use HasFactory;
use Translatable;
    // protected $fillable = [
    //       'title',
    //       'full_text'
    //    ];
        // 2. To add translation methods

         // 3. To define which attributes needs to be translated
         public $translatedAttributes = ['title', 'full_text'];


}
