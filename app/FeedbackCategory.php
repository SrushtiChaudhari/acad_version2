<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FeedbackCategoryID
 * @property string $FeedbackCategoryName
 */
class FeedbackCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FeedbackCategory';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FeedbackCategoryID';

    /**
     * @var array
     */
    protected $fillable = ['FeedbackCategoryName'];

}
