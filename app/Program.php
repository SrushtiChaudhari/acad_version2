<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ProgramID
 * @property int $DepartmentID
 * @property int $CurriculumID
 * @property string $BranchName
 * @property string $DegreeName
 * @property string $ProgramAdmissionYear
 * @property string $ProgramCode
 * @property string $ProgramAbbreviation
 * @property string $LaunchYear
 * @property string $created_at
 * @property string $updated_at
 * @property Department $department
 * @property Curriculum $curriculum
 * @property Semester[] $semesters
 * @property Student[] $students
 */
class Program extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Program';

    protected $primaryKey = 'ProgramID';

    /**
     * @var array
     */
    protected $fillable = ['DepartmentID','CurriculumID', 'BranchName', 'DegreeName', 'ProgramAdmissionYear', 'ProgramCode', 'ProgramAbbreviation', 'LaunchYear', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'DepartmentID', 'DepartmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum', 'CurriculumID', 'CurriculumID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semesters()
    {
        return $this->hasMany('App\Semester', 'ProgramID', 'ProgramID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student', 'ProgramID', 'ProgramID');
    }
}
