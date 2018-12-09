<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ProgramID
 * @property int $CurriculumID
 * @property int $DepartmentID
 * @property string $BranchName
 * @property string $DegreeName
 * @property string $PogramAdmissionYear
 * @property string $ProgramCode
 * @property string $ProgramAbbreviation
 * @property string $LaunchYear
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

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ProgramID';

    /**
     * @var array
     */
    protected $fillable = ['CurriculumID', 'DepartmentID', 'BranchName', 'DegreeName', 'PogramAdmissionYear', 'ProgramCode', 'ProgramAbbreviation', 'LaunchYear'];

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
