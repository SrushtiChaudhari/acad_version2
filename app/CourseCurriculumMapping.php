<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CourseCurriculumMappingID
 * @property int $CurriculumID
 * @property int $CourseID
 * @property int $SemesterNumber
 * @property string $created_at
 * @property string $updated_at
 * @property Course $course
 * @property Curriculum $curriculum
 */
class CourseCurriculumMapping extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'CourseCurriculumMapping';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'CourseCurriculumMappingID';

    /**
     * @var array
     */
    protected $fillable = ['CurriculumID', 'CourseID', 'SemesterNumber', 'created_at', 'updated_at'];

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
    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum', 'CurriculumID', 'CurriculumID');
    }
}
