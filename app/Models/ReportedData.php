<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedData extends Model
{
    use HasFactory;
    protected $fillable = ['reported_data', 'country_id', 'contact_type_id', 'avg_grade'];

    /**
     * Get countries of reported data.
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get contact types of reported data.
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactType() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ContactType::class);
    }

    /**
     * Get all reported spam
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param
     * @return      Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reportedSpam() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ReportedSpam::class);
    }
}
