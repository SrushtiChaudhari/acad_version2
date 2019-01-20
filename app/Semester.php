<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $SemesterID
 * @property int $ProgramID
 * @property int $MaxCredit
 * @property int $MinCredit
 * @property float $DurationInMonths
 * @property string $SemesterType
 * @property int $SemesterNumber
 * @property boolean $IsCurrent
 * @property string $created_at
 * @property string $updated_at
 * @property Program $program
 * @property Enrollment[] $enrollments
 * @property FacultyCourseMapping[] $facultyCourseMappings
 * @property SemesterRegistration[] $semesterRegistrations
 * @property StudentSemAcademicRecord[] $studentSemAcademicRecords
 */
class Semester extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Semester';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SemesterID';

    /**
     * @var array
     */
    protected $fillable = ['ProgramID', 'MaxCredit', 'MinCredit', 'DurationInMonths', 'SemesterType', 'SemesterNumber', 'IsCurrent', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo('App\Program', 'ProgramID', 'ProgramID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany('App\Enrollment', 'SemesterID', 'SemesterID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyCourseMappings()
    {
        return $this->hasMany('App\FacultyCourseMapping', 'SemesterID', 'SemesterID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semesterRegistrations()
    {
        return $this->hasMany('App\SemesterRegistration', 'SemesterID', 'SemesterID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentSemAcademicRecords()
    {
        return $this->hasMany('App\StudentSemAcademicRecord', 'SemesterID', 'SemesterID');
    }
}
