<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $RegistrationID
 * @property int $FacultyID
 * @property int $SemesterID
 * @property int $StudentEnrollmentNumber
 * @property string $Date
 * @property string $RegistrationStatus
 * @property int $CreditsTaken
 * @property Student $student
 * @property Semester $semester
 * @property Faculty $faculty
 */
class SemesterRegistration extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'SemesterRegistration';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'RegistrationID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'SemesterID', 'StudentEnrollmentNumber', 'Date', 'RegistrationStatus', 'CreditsTaken'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Student', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester()
    {
        return $this->belongsTo('App\Semester', 'SemesterID', 'SemesterID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }
}
