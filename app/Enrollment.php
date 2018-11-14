<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $EnrollmentID
 * @property int $StudentEnrollmentNumber
 * @property int $SemesterID
 * @property int $CourseID
 * @property boolean $IsCurrentlyEnrolled
 * @property boolean $IsDetained
 * @property boolean $IsBacklog
 * @property float $CourseGrade
 * @property Course $course
 * @property Semester $semester
 * @property Student $student
 * @property StudentAttendance[] $studentAttendances
 * @property StudentExamScore[] $studentExamScores
 * @property StudentFeedback[] $studentFeedbacks
 */
class Enrollemnt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Enrollment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'EnrollmentID';

    /**
     * @var array
     */
    protected $fillable = ['StudentEnrollmentNumber', 'SemesterID', 'CourseID', 'IsCurrentlyEnrolled', 'IsDetained', 'IsBacklog', 'CourseGrade'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo('App\Course', 'CourseID', 'CourseID');
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
    public function student()
    {
        return $this->belongsTo('App\Student', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentAttendances()
    {
        return $this->hasMany('App\StudentAttendance', 'EnrollmentID', 'EnrollmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentExamScores()
    {
        return $this->hasMany('App\StudentExamScore', 'EnrollmentID', 'EnrollmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentFeedbacks()
    {
        return $this->hasMany('App\StudentFeedback', 'EnrollmentID', 'EnrollmentID');
    }
}
