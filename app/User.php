<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'provider', 'provider_id', 'network_portfolio_api_token', 'nickname'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'network_portfolio_api_token'
    ];
    
    public function projects()
    {
        return $this->hasManyThrough('App\Project', 'App\ProjectMember');
       
    }

    public function projectMembers()
    {
       return $this->hasMany('App\ProjectMember');
    }



    public static function scopeNamed($query, $name)
    {
       return $query->where('name', 'LIKE', '%' . $name . '%')->get()->first();
    }
}