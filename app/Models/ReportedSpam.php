<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedSpam extends Model
{
    use HasFactory;
    protected $fillable = ['contact_type_id', 'spam_type_id', 'ip', 'caller_name', 'reported_name', 'description', 'grade', 'cell', 'email'];
}
