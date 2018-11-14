<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentAttendanceID
 * @property int $EnrollmentID
 * @property string $Date
 * @property boolean $IsPresent
 * @property Enrollment $enrollment
 */
class StudentAttendance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentAttendance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentAttendanceID';

    /**
     * @var array
     */
    protected $fillable = ['EnrollmentID', 'Date', 'IsPresent'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo('App\Enrollment', 'EnrollmentID', 'EnrollmentID');
    }
}
