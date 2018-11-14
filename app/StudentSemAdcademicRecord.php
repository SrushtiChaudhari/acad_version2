<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentAcademicRecordID
 * @property int $SemesterID
 * @property int $StudentEnrollmentNumber
 * @property int $SemScore
 * @property boolean $IsPassed
 * @property boolean $IsDebarred
 * @property Student $student
 * @property Semester $semester
 */
class StudentSemAdcademicRecord extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentSemAcademicRecord';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentAcademicRecordID';

    /**
     * @var array
     */
    protected $fillable = ['SemesterID', 'StudentEnrollmentNumber', 'SemScore', 'IsPassed', 'IsDebarred'];

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
}
