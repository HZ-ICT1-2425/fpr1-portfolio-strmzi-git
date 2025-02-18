<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $table = 'tests';
    protected $primaryKey = 'id';
    protected $fillable = ["course_id", "name", "weighting_factor", "lowest_passing_grade", "best_grade"];
}
