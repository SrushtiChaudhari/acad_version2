<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LogID
 * @property int $ModifiedBy
 * @property string $ModefiedOn
 * @property int $CreatedBy
 * @property string $CreatedOn
 */
class LogTable extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LogTable';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LogID';

    /**
     * @var array
     */
    protected $fillable = ['ModifiedBy', 'ModefiedOn', 'CreatedBy', 'CreatedOn'];

}
