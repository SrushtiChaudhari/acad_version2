<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentAdmissionID
 * @property int $StudentEnrollmentNumber
 * @property string $AdmissionDate
 * @property string $AdmissionYear
 * @property string $AdmissionType
 * @property float $MeritMarks1
 * @property float $MeritMarks2
 * @property int $MeritRank
 * @property string $AdmissionCategory
 * @property Student $student
 */
class StudentAdmission extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentAdmission';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentAdmissionID';

    /**
     * @var array
     */
    protected $fillable = ['StudentEnrollmentNumber', 'AdmissionDate', 'AdmissionYear', 'AdmissionType', 'MeritMarks1', 'MeritMarks2', 'MeritRank', 'AdmissionCategory'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Student', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }
}
