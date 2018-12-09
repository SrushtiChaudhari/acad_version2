<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExamID
 * @property int $FacultyID
 * @property int $CourseID
 * @property int $ExamTypeID
 * @property string $EvaluationType
 * @property string $Date
 * @property float $Duration
 * @property string $Time
 * @property string $Place
 * @property ExamType $examType
 * @property Course $course
 * @property Faculty $faculty
 * @property StudentExamScore[] $studentExamScores
 */
class Exam extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Exam';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExamID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'CourseID', 'ExamTypeID', 'EvaluationType', 'Date', 'Duration', 'Time', 'Place'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function examType()
    {
        return $this->belongsTo('App\ExamType', 'ExamTypeID', 'ExamTypeID');
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
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentExamScores()
    {
        return $this->hasMany('App\StudentExamScore', 'ExamID', 'ExamID');
    }
}
