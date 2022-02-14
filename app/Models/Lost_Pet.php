<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lost_Pet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lost__pets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'pet_id', 'photo', 'lat', 'lng' , 'pet_category_id'];

    
}