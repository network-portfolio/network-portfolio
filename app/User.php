<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timestamps', 'name', 'email', 'password', 'rememberToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
    
    public function projects()
    {
       return $this->hasMany('App\Project');
    }
    
    public function projectMembers()
    {
       return $this->hasMany('App\ProjectMember');
    }

    public static function scopeNamed($query, $name)
    {
       return $query->where('name', 'LIKE', '%' . $name . '%')->first();
    }

}