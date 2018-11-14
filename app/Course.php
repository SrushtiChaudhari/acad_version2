<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CourseID
 * @property string $CourseName
 * @property string $CourseAbbreviation
 * @property string $CourseCode
 * @property string $SyllabusCode
 * @property boolean $IsTheory
 * @property CourseCurriculumMapping[] $courseCurriculumMappings
 * @property Enrollment[] $enrollments
 * @property Exam[] $exams
 * @property FacultyCourseMapping[] $facultyCourseMappings
 */
class Course extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Course';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'CourseID';

    /**
     * @var array
     */
    protected $fillable = ['CourseName', 'CourseAbbreviation', 'CourseCode', 'SyllabusCode', 'IsTheory'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseCurriculumMappings()
    {
        return $this->hasMany('App\CourseCurriculumMapping', 'CourseID', 'CourseID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany('App\Enrollment', 'CourseID', 'CourseID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Exam', 'CourseID', 'CourseID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyCourseMappings()
    {
        return $this->hasMany('App\FacultyCourseMapping', 'CourseID', 'CourseID');
    }
}
