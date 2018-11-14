<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyQualificationID
 * @property int $FacultyID
 * @property string $QualificationName
 * @property string $CollegeName
 * @property string $QualificationLevel
 * @property string $YearOfPassing
 * @property Faculty $faculty
 */
class FacultyQualification extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacultyQualification';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyQualificationID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'QualificationName', 'CollegeName', 'QualificationLevel', 'YearOfPassing'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }
}
