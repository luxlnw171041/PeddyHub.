<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
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

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'detail', 'photo', 'video','pet_category_id','like_all'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id'); 
    }
    public function profile(){
        return $this->belongsTo('App\Models\Profile', 'user_id'); 
    }
    public function comments() 
    {
        return $this->hasMany('App\Models\Comment'); 
    }
    public function commentsCount() 
    {
        return $this->comments() 
            ->selectRaw('post_id, count(*) as aggregate')
            ->groupBy('post_id');
    }
}
