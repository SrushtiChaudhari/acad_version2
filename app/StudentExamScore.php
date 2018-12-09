<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentExamScoreID
 * @property int $EnrollmentID
 * @property int $ExamID
 * @property int $StudentExamScore
 * @property Exam $exam
 * @property Enrollment $enrollment
 */
class StudentExamScore extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentExamScore';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentExamScoreID';

    /**
     * @var array
     */
    protected $fillable = ['EnrollmentID', 'ExamID', 'StudentExamScore'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exam()
    {
        return $this->belongsTo('App\Exam', 'ExamID', 'ExamID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo('App\Enrollment', 'EnrollmentID', 'EnrollmentID');
    }
}
