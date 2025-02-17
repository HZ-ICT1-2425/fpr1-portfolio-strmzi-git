<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    protected $fillable = ["answer", "question"];
    protected $table = 'faq';
}
