<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends BaseModel
{
    use SoftDeletes;
    
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    
}