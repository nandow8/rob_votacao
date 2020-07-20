<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class EnqueteCandidato extends BaseModel
{
    use SoftDeletes;
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enquete_candidatos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    
}