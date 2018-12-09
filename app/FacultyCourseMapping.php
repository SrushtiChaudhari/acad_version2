<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyCourseMappingID
 * @property int $SemesterID
 * @property int $CourseID
 * @property int $FacultyID
 * @property Faculty $faculty
 * @property Course $course
 * @property Semester $semester
 */
class FacultyCourseMapping extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacultyCourseMapping';

    /**
     * @var array
     */
    protected $fillable = ['CourseID', 'FacultyID'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }

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
}
