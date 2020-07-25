<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class Grafico extends BaseModel
{
    use SoftDeletes;
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'graficos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    
}