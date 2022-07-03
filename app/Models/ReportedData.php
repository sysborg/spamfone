<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedData extends Model
{
    use HasFactory;
    protected $fillable = ['reported_data', 'country_id', 'contact_type_id', 'avg_grade'];
}
