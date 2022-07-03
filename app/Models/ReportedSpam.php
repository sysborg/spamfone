<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedSpam extends Model
{
    use HasFactory;
    protected $fillable = ['spam_type_id', 'reported_data_id', 'ip', 'reported_name', 'whistleblower_name', 'comment', 'grade'];
}
