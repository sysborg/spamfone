<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedSpam extends Model
{
    use HasFactory;
    protected $fillable = ['spam_type_id', 'reported_data_id', 'ip', 'reported_name', 'whistleblower_name', 'comment', 'grade'];

    /**
     * Get spam types of reported spam.
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function spamTypes() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SpamType::class);
    }

    /**
     * Get reported date of reported spam.
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reportedSpam() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ReportedSpam::class);
    }
}
