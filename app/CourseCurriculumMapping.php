<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CourseCurriculumMappingID
 * @property int $CourseID
 * @property int $CourseCredits
 * @property int $SemesterNumber
 * @property Course $course
 * @property Curriculum[] $curricula
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
    protected $fillable = ['CourseID', 'CourseCredits', 'SemesterNumber'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo('App\Course', 'CourseID', 'CourseID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function curricula()
    {
        return $this->hasMany('App\Curriculum', 'CourseCurriculumMappingID', 'CourseCurriculumMappingID');
    }
}
