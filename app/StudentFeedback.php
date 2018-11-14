<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentFeedbackID
 * @property int $EnrollmentID
 * @property int $FeedbackCategory1Marks
 * @property int $Category2Marks
 * @property int $Category3Marks
 * @property int $Category4Marks
 * @property int $Category5Marks
 * @property int $Category6Marks
 * @property int $Category7Marks
 * @property int $Category8Marks
 * @property int $Category9Marks
 * @property int $Category10Marks
 * @property string $Remarks
 * @property Enrollment $enrollment
 */
class StudentFeedback extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentFeedback';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentFeedbackID';

    /**
     * @var array
     */
    protected $fillable = ['EnrollmentID', 'FeedbackCategory1Marks', 'Category2Marks', 'Category3Marks', 'Category4Marks', 'Category5Marks', 'Category6Marks', 'Category7Marks', 'Category8Marks', 'Category9Marks', 'Category10Marks', 'Remarks'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo('App\Enrollment', 'EnrollmentID', 'EnrollmentID');
    }
}
