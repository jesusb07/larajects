<?php

namespace critipelis;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'users_profile';

    protected $fillable = ['user_id', 'bio','fav_movie','fav_performer','fav_genre'];

    public function user(){
        return $this->belongsTo('User');
    }
}
