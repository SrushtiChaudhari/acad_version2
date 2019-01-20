<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CurriculumID
 * @property int $CourseCurriculumMappingID
 * @property string $CurriculumCode
 * @property int $TotalCredits
 * @property string $created_at
 * @property string $updated_at
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

    protected $primaryKey= 'CurriculumID';

    /**
     * @var array
     */
    protected $fillable = ['CurriculumCode', 'TotalCredits', 'created_at', 'updated_at'];

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
