<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyExperienceID
 * @property int $FacultyID
 * @property string $EmployerName
 * @property string $Designation
 * @property string $FromDate
 * @property string $ToDate
 * @property Faculty $faculty
 */
class FacultyExperience extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacultyExperience';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyExperienceID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'EmployerName', 'Designation', 'FromDate', 'ToDate'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }
}
