<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class Enquete extends BaseModel
{
    use SoftDeletes;
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enquetes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    
}