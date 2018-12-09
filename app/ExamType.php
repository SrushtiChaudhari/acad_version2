<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExamTypeID
 * @property int $ExamName
 * @property int $MaxMark
 * @property Exam[] $exams
 */
class ExamType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ExamType';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExamTypeID';

    /**
     * @var array
     */
    protected $fillable = ['ExamName', 'MaxMark'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Exam', 'ExamTypeID', 'ExamTypeID');
    }
}
