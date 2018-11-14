<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CurriculumID
 * @property int $CourseCurriculumMappingID
 * @property CourseCurriculumMapping $courseCurriculumMapping
 * @property Program[] $programs
 */
class Curriculum extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Curriculum';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function courseCurriculumMapping()
    {
        return $this->belongsTo('App\CourseCurriculumMapping', 'CourseCurriculumMappingID', 'CourseCurriculumMappingID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programs()
    {
        return $this->hasMany('App\Program', 'CurriculumID', 'CurriculumID');
    }
}
